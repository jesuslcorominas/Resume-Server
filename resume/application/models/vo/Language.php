<?php
final class Language implements JsonSerializable {

  private $id;
  private $name;
  private $level;
  private $updated;

  public function __construct($id,$name,$level,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->level = $level;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
