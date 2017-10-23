<?php
final class Experience implements JsonSerializable {

  private $id;
  private $company_name;
  private $image;
  private $start;
  private $end;
  private $description;
  private $updated;

  public function __construct($id,$company_name,$image,$start,$end,$description,$updated) {
    $this->id = $id;
    $this->company_name = $company_name;
    $this->image = $image;
    $this->start = $start;
    $this->end = $end;
    $this->description = $description;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
