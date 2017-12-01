<?php
defined('BASEPATH') or exit('No direct script access allowed');
require( APPPATH . 'models/vo/Training.php');
require( APPPATH . 'models/schema/Training_schema.php');
class Training_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Training_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $training_list = array();
        foreach($result as $row) {
          $training = new Training($row->id,$row->name,$row->school,$row->mark,$row->start,$row->end,$row->hours,$row->official,$row->updated);
          array_push($training_list,$training);
        }
        return $training_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Training_schema::ID => $id
      ));
      $this->db->from(Training_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $training = new Training($row->id,$row->name,$row->school,$row->mark,$row->start,$row->end,$row->hours,$row->official,$row->updated);
        return $training;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Training_schema::ID => $id
      ));
      $this->db->from(Training_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
