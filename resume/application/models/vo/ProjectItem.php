<?php
final class Projectitem implements JsonSerializable {

  private $id;
  private $name;
  private $description;
  private $platform;
  private $icon;
  private $path;
  private $experience;
  private $updated;

  public function __construct($id,$name,$description,$platform,$icon,$path,$experience,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->platform = $platform;
    $this->icon = $icon;
    $this->path = $path;
    $this->experience = $experience;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
