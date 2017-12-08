<?php
final class ImageItem implements JsonSerializable {

  private $id;
  private $path;
  private $project_id;
  private $updated;

  public function __construct($id,$path,$project_id,$updated) {
    $this->id = $id;
    $this->path = $path;
    $this->project_id = $project_id;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
