<?php
final class ExperienceItem implements JsonSerializable {

  private $id;
  private $name;
  private $image;
  private $start;
  private $end;
  private $position;
  private $description;
  private $updated;  
  private $projects;

  public function __construct($id,$name,$image,$start,$end,$position,$description,$updated,$projects) {
    $this->id = $id;
    $this->name = $name;
    $this->image = $image;
    $this->start = $start;
    $this->end = $end;
	$this->position = $position;
    $this->description = $description;
    $this->updated = $updated;
	$this->projects = $projects;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}