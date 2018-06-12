<?php
final class Experience implements JsonSerializable {

  private $id;
  private $name;
  private $image;
  private $start;
  private $end;
  private $position;
  private $description;
  private $updated;  

  public function __construct($id,$name,$image,$start,$end,$position,$description,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->image = $image;
    $this->start = $start;
    $this->end = $end;
	$this->position = $position;
    $this->description = $description;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
