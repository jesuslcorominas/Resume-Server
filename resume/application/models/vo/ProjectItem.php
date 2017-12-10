<?php
final class Projectitem implements JsonSerializable {

  private $id;
  private $name;
  private $description;
  private $platform;
  private $icon;
  private $path;
  private $updated;
  private $images;
  private $libraries;

  public function __construct($id,$name,$description,$platform,$icon,$path,$updated,$images,$libraries) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->platform = $platform;
    $this->icon = $icon;
    $this->path = $path;
    $this->updated = $updated;
	$this->images = $images;
	$this->libraries = $libraries;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
