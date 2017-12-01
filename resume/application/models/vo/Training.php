<?php
final class Training implements JsonSerializable {

  private $id;
  private $name;
  private $school;
  private $mark;  
  private $start;
  private $end;
  private $hours;
  private $official;
  private $updated;

  public function __construct($id,$name,$school,$mark,$start,$end,$hours,$official,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->mark = $mark;
    $this->school = $school;
    $this->start = $start;
    $this->end = $end;
	$this->hours = $hours;
	$this->official = $official;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
