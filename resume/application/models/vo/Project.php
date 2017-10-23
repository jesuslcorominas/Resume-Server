<?php
final class Project implements JsonSerializable {

  private $id;
  private $name;
  private $description;
  private $platform;
  private $icon;
  private $path;
  private $experience_id;
  private $updated;

  public function __construct($id,$name,$description,$platform,$icon,$path,$experience_id,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->platform = $platform;
    $this->icon = $icon;
    $this->path = $path;
    $this->experience_id = $experience_id;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
