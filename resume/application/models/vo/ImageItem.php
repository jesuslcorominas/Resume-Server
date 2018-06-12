<?php
final class ImageItem implements JsonSerializable {

  private $id;
  private $name;
  private $project_id;
  private $updated;

  public function __construct($id,$name,$project_id,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->project_id = $project_id;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
