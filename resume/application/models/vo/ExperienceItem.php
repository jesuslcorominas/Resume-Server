<?php
final class ExperienceItem implements JsonSerializable {

  private $id;
  private $company_name;
  private $image;
  private $start;
  private $end;
  private $position;
  private $description;
  private $updated;  
  private $projects;

  public function __construct($id,$company_name,$image,$start,$end,$position,$description,$updated,$projects) {
    $this->id = $id;
    $this->company_name = $company_name;
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