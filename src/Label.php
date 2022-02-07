<?php

namespace SkosmosClient;

/**
 * Represents the label for a related SKOS element.
 */
class Label {

  /**
   * A URI to which the label can be linked.
   *
   * @var string
   */
  protected $uri;

  /**
   * The text for the label.
   *
   * @var string
   */
  protected $label;

  /**
   * Constructs a new Label object.
   *
   * @param string $uri
   *   A URI to which the label can be linked.
   * @param string $label
   *   The text for the label.
   */
  public function __construct(string $uri = null, string $label = null) {
    $this->uri = $uri;
    $this->label = $label;
  }

  /**
   * Sets the URI.
   *
   * @param string $uri
   *   A URI to which the label can be linked.
   *
   * @return Label
   *   The Label object.
   */
  public function setUri(string $uri) {
    $this->uri = $uri;

    return $this;
  }

  /**
   * Gets the URI.
   *
   * @return string
   *   The URI.
   */
  public function getUri() {
    return $this->uri;
  }

  /**
   * Sets the text for the label.
   *
   * @param string $label
   *   The text for the label.
   *
   * @return Label
   *   The Label object.
   */
  public function setlabel(string $label) {
    $this->label = $label;

    return $this;
  }

  /**
   * Gets the text for the label.
   *
   * @return string
   *   The label text
   */
  public function getLabel() {
    return $this->label;
  }

}

