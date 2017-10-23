<?php
final class Other_training implements JsonSerializable {

  private $id;
  private $name;
  private $school;
  private $date;
  private $hours;
  private $image;
  private $updated;

  public function __construct($id,$name,$school,$date,$hours,$image,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->date = $date;
    $this->hours = $hours;
    $this->image = $image;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
