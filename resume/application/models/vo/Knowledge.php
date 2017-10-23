<?php
final class Knowledge implements JsonSerializable {

  private $id;
  private $name;
  private $image;
  private $type;
  private $level;
  private $updated;

  public function __construct($id,$name,$image,$type,$level,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->image = $image;
    $this->type = $type;
    $this->level = $level;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
