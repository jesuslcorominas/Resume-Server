<?php
defined('BASEPATH') or exit('No direct script access allowed');
require( APPPATH . 'models/vo/Academic_training.php');
require( APPPATH . 'models/schema/Academic_training_schema.php');
class Academic_training_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Academic_training_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $academic_training_list = array();
        foreach($result as $row) {
          $academic_training = new Academic_training($row->id,$row->name,$row->mark,$row->image,$row->start,$row->end,$row->updated);
          array_push($academic_training_list,$academic_training);
        }
        return $academic_training_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Academic_training_schema::ID => $id
      ));
      $this->db->from(Academic_training_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $academic_training = new Academic_training($row->id,$row->name,$row->mark,$row->image,$row->start,$row->end,$row->updated);
        return $academic_training;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Academic_training_schema::ID => $id
      ));
      $this->db->from(Academic_training_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
