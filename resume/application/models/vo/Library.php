<?php
final class Library implements JsonSerializable {

  private $id;
  private $name;
  private $path;
  private $description;
  private $updated;

  public function __construct($id,$name,$path,$description,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->path = $path;
    $this->description = $description;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
