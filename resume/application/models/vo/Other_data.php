<?php
final class Other_data implements JsonSerializable {

  private $id;
  private $name;
  private $description;
  private $updated;

  public function __construct($id,$name,$description,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
