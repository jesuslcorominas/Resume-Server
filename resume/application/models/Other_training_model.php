<?php
defined('BASEPATH') or exit('No direct script access allowed');
require( APPPATH . 'models/vo/Other_training.php');
require( APPPATH . 'models/schema/Other_training_schema.php');
class Other_training_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Other_training_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $other_training_list = array();
        foreach($result as $row) {
          $other_training = new Other_training($row->id,$row->name,$row->school,$row->date,$row->hours,$row->image,$row->updated);
          array_push($other_training_list,$other_training);
        }
        return $other_training_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Other_training_schema::ID => $id
      ));
      $this->db->from(Other_training_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $other_training = new Other_training($row->id,$row->name,$row->school,$row->date,$row->hours,$row->image,$row->updated);
        return $other_training;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Other_training_schema::ID => $id
      ));
      $this->db->from(Other_training_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
