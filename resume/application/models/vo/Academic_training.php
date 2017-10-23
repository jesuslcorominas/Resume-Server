<?php
final class Academic_training implements JsonSerializable {

  private $id;
  private $name;
  private $mark;
  private $image;
  private $start;
  private $end;
  private $updated;

  public function __construct($id,$name,$mark,$image,$start,$end,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->mark = $mark;
    $this->image = $image;
    $this->start = $start;
    $this->end = $end;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
