<?php

namespace SkosmosClient;

/**
 * Represents the RDF graph data of a SKOS Concept.
 */
class Concept {

  /**
   * A deserialized array representing an RDF graph.
   *
   * @var mixed[]
   */
  protected $graph;

  /**
   * The URI of the concept.
   *
   * @var string
   */
  protected $uri;

  /**
   * The language of the data to be returned.
   *
   * @var string
   */
  protected $lang;

  /**
   * An array of RDF metadata for the Concept.
   *
   * @var mixed[]
   */
  protected $concept;

  /**
   * Builds a new Concept object.
   *
   * @param mixed[] $graph
   *   A deserialized array representing an RDF graph.
   * @param string $uri
   *   The URI of the concept.
   * @param string $lang
   *   The RDF language code when the requested resource for the MIME type is
   *   language specific, e.g. "fi" or "en". (optional)
   */
  public function __construct(array $graph, string $uri, string $lang = 'en') {
    $this->graph = $graph;
    $this->uri = $uri;
    $this->lang = $lang;

    // Attempt to find the RDF metadata object of the concept.
    foreach ($this->graph as $metadata) {
      if (isset($metadata->uri) && $metadata->uri == $uri) {
        $this->concept = $metadata;
        break;
      }
    }
    if (empty($this->concept)) {
      throw new \RuntimeException('Metadata for the given Concept URI could not be found in the RDF Graph.');
    }
  }

  /**
   * Gets the URI of the Concept.
   *
   * @return string
   *   The URI.
   */
  public function getUri() {
    return $this->concept->uri;
  }

  /**
   * Gets the metadata type of the Concept.
   *
   * @return string
   *   The metadata type.
   */
  public function getType() {
    return $this->concept->type;
  }

  /**
   * Gets the date that the concept was created.
   *
   * @return string
   *   The creation date.
   */
  public function getCreated() {
    return $this->concept->{'dct:created'}->value;
  }

  /**
   * Gets the date that the concept was last modified.
   *
   * @return string
   *   The modification date.
   */
  public function getModified() {
    return $this->concept->{'dct:modified'}->value;
  }

  /**
   * Gets the labels of schemes to which this concept belongs.
   *
   * @return Label[]
   *   The scheme labels.
   */
  public function getScheme() {
    $schemes = [];
    if (isset($this->concept->inScheme)) {
      $schemes = $this->buildLabels($this->toArray($this->concept->inScheme));
    }
    return $schemes;
  }

  /**
   * Gets the preferred label for the Concept.
   *
   * @return string
   *   The preferred label in the given language.
   */
  public function getPrefLabel() {
    $label = '';
    try {
      $label = $this->getValueForLang($this->concept->prefLabel);
    }
    catch (\RuntimeException $e) {
      // Do nothing.
    }
    return $label;
  }

  /**
   * Gets the alternate labels for the Concept.
   *
   * @return string[]
   *   The alternate labels in the given language.
   */
  public function getAltLabels() {
    $labels = [];

    if (isset($this->concept->altLabel)) {
      foreach ($this->toArray($this->concept->altLabel) as $lang_label) {
        if ($lang_label->lang == $this->lang) {
          $labels[] = $lang_label->value;
        }
      }
    }
    return $labels;
  }

  /**
   * Gets the concept definition.
   *
   * @return string
   *   The definition.
   */
  public function getDefinition() {
    $value = '';

    if (isset($this->concept->{'skos:definition'})) {
      $definitions = $this->concept->{'skos:definition'};
      foreach ($this->toArray($definitions) as $definition) {
        try {
          if (is_object($definition) && isset($definition->uri)) {
            $metadata = $this->getMetadataFromGraph($definition->uri);
            $value = $this->getValueForLang($this->toArray($metadata->{'http://www.w3.org/1999/02/22-rdf-syntax-ns#value'}));
          }
          // @todo Handle literals, which there was no example for at the time
          //   of this writing.
        }
        catch (\RuntimeException $e) {
          // Do nothing.
        }
      }
    }
    return $value;
  }

  /**
   * Gets the source of the concept definition.
   *
   * @return string
   *   The definition source.
   */
  public function getDefinitionSource() {
    $value = '';

    if (isset($this->concept->{'skos:definition'})) {
      $definition = $this->concept->{'skos:definition'};
      try {
        if (is_object($definition) && isset($definition->uri)) {
          $metadata = $this->getMetadataFromGraph($definition->uri);
          $value = $this->getValueForLang($this->toArray($metadata->{'dct:source'}));
        }
      }
      catch (\RuntimeException $e) {
        // Do nothing.
      }
    }
    return $value;
  }

  /**
   * Gets the broader relations for the Concept.
   *
   * @return Label[]
   *   The broader concepts.
   */
  public function getBroader() {
    $broader = [];
    if (isset($this->concept->broader)) {
      $broader = $this->buildLabels($this->toArray($this->concept->broader), 'prefLabel');
    }
    return $broader;
  }

  /**
   * Gets the narrower relations for the Concept.
   *
   * @return Label[]
   *   The narrower concepts.
   */
  public function getNarrower() {
    $narrower = [];
    if (isset($this->concept->narrower)) {
      $narrower = $this->buildLabels($this->toArray($this->concept->narrower), 'prefLabel');
    }
    return $narrower;
  }

  /**
   * Gets the associated relations for the Concept.
   *
   * @return Label[]
   *   The associated concepts.
   */
  public function getRelated() {
    $related = [];
    if (isset($this->concept->related)) {
      $related = $this->buildLabels($this->toArray($this->concept->related), 'prefLabel');
    }
    return $related;
  }

  /**
   * Gets labels for the broader matching concepts.
   *
   * @return Label[]
   *   The labels.
   */
  public function getBroadMatch() {
    $mappings = [];
    if (isset($this->concept->broadMatch)) {
      $mappings = $this->buildMappings($this->toArray($this->concept->broadMatch));
    }
    return $mappings;
  }

  /**
   * Gets labels for the narrower matching concepts.
   *
   * @return Label[]
   *   The labels.
   */
  public function getNarrowMatch() {
    $mappings = [];
    if (isset($this->concept->narrowMatch)) {
      $mappings = $this->buildMappings($this->toArray($this->concept->narrowMatch));
    }
    return $mappings;
  }

  /**
   * Gets labels for the related matching concepts.
   *
   * @return Label[]
   *   The labels.
   */
  public function getRelatedMatch() {
    $mappings = [];
    if (isset($this->concept->relatedMatch)) {
      $mappings = $this->buildMappings($this->toArray($this->concept->relatedMatch));
    }
    return $mappings;
  }

  /**
   * Gets labels for the closely-matching concepts.
   *
   * @return Label[]
   *   The labels.
   */
  public function getCloseMatch() {
    $mappings = [];
    if (isset($this->concept->closeMatch)) {
      $mappings = $this->buildMappings($this->toArray($this->concept->closeMatch));
    }
    return $mappings;
  }

  /**
   * Gets labels for the exactly-matching concepts.
   *
   * @return Label[]
   *   The labels.
   */
  public function getExactMatch() {
    $mappings = [];
    if (isset($this->concept->exactMatch)) {
      $mappings = $this->buildMappings($this->toArray($this->concept->exactMatch));
    }
    return $mappings;
  }

  /**
   * Checks if the passed metadata is an array and wraps it in an array if not.
   *
   * When SKOS metadata is output as JSON and then decoded by PHP a SKOS
   * property will contain a single stdClass object or an array of objects.
   * Being able to always deal with these properties as arrays simplifies the
   * code, so single objects are wrapped in an array.
   *
   * @param mixed $metadata
   *   Concept metadata which may be a single stdClass object or an array of
   *   objects.
   *
   * @return stdClass[]
   *   The metadata in an array.
   */
  protected function toArray($metadata) {
    return is_array($metadata) ? $metadata : [$metadata];
  }

  /**
   * Builds an array of labels from URI references.
   *
   * @param stdClass[] $references
   *   References to other elements. Each reference consists of a stdClass
   *   object with a uri property.
   * @param string $label_property
   *   The metadata property that contains the label data to be displayed.
   *
   * @return Label[]
   *   The labels.
   */
  protected function buildLabels(array $references, string $label_property = 'label') {
    $labels = [];
    foreach ($references as $reference) {
      $label = new Label($reference->uri);
      try {
        $metadata = $this->getMetadataFromGraph($label->getUri());
        if (!isset($metadata->{$label_property})) {
          throw new \RuntimeException('The label property is undefined.');
        }
        $value = $this->getValueForLang($this->toArray($metadata->{$label_property}));
        $label->setLabel($value);
      }
      catch (\RuntimeException $e) {
        $label->setLabel($label->getUri());
      }
      $labels[] = $label;
    }
    return $labels;
  }

  /**
   * Builds an array of mapping labels.
   *
   * The Skosmos UI queries the mapping URI to get its metadata to display the
   * actual label for the concept.  To simplify things, this function just
   * reuses the URI as the label text.
   *
   * @param stdClass[] $references
   *   References to concepts from other, external SKOS vocabularies.
   *
   * @return Label[]
   *   The labels.
   */
  protected function buildMappings(array $references) {
    $uris = [];
    foreach ($references as $reference) {
      $uris[] = new Label($reference->uri, $reference->uri);
    }
    return $uris;
  }

  /**
   * Extracts a related concept's metadata within the graph.
   *
   * @param string $uri
   *   The URI of the related concept.
   *
   * @return stdClass
   *   Metadata for the related concept.
   *
   * @throws \RuntimeException
   *   Thrown if the concept could not be located within the graph.
   */
  protected function getMetadataFromGraph(string $uri) {
    foreach ($this->graph as $metadata) {
      if (isset($metadata->uri) && $metadata->uri == $uri) {
        return $metadata;
      }
    }
    throw new \RuntimeException('Metadata for the given Concept URI could not be found in the RDF Graph.');
  }

  /**
   * Extracts a value for the requested language from concept metadata.
   *
   * @param stdClass[] $values
   *   An array of value objects.  Each object contains the following
   *   properties:
   *   - lang: The language of the value.
   *   - value: The value.
   *
   * @return string
   *   The value.
   *
   * @throws \RuntimeException
   *   Thrown if no value for the requested language could be found.
   */
  protected function getValueForLang(array $values) {
    foreach ($values as $lang_value) {
      if ($lang_value->lang == $this->lang) {
        return $lang_value->value;
      }
    }
    throw new \RuntimeException('A value could not be found for the given language.');
  }

}

