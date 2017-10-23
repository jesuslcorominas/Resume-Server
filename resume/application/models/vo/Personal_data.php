<?php
final class Personal_data implements JsonSerializable {

  private $id;
  private $name;
  private $surname;
  private $birthdate;
  private $email;
  private $phone_number;
  private $summary;
  private $image;
  private $updated;

  public function __construct($id,$name,$surname,$birthdate,$email,$phone_number,$summary,$image,$updated) {
    $this->id = $id;
    $this->name = $name;
    $this->surname = $surname;
    $this->birthdate = $birthdate;
    $this->email = $email;
    $this->phone_number = $phone_number;
    $this->summary = $summary;
    $this->image = $image;
    $this->updated = $updated;
  }

  public function jsonSerialize() {
    $fields = get_object_vars($this);
    return $fields;
  }
}
