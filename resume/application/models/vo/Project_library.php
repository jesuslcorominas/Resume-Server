<?php
final class Project_library implements JsonSerializable {

  private $project;
  private $library;

  public function __construct($project,$library) {
    $this->project = $project;
    $this->library = $library;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
