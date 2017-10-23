<?php
final class Project_image implements JsonSerializable {

  private $id;
  private $path;
  private $project_id;
  private $updated;

  public function __construct($id,$path,$project,$updated) {
    $this->id = $id;
    $this->path = $path;
    $this->project = $project;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
