<?php
defined('BASEPATH') or exit('No direct script access allowed');
require( APPPATH . 'models/vo/Personal_data.php');
require( APPPATH . 'models/schema/Personal_data_schema.php');
class Personal_data_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Personal_data_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $personal_data_list = array();
        foreach($result as $row) {
          $personal_data = new Personal_data($row->id,$row->name,$row->surname,$row->birthdate,$row->email,$row->phone_number,$row->summary,$row->image,$row->updated);
          array_push($personal_data_list,$personal_data);
        }
        return $personal_data_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Personal_data_schema::ID => $id
      ));
      $this->db->from(Personal_data_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $personal_data = new Personal_data($row->id,$row->name,$row->surname,$row->birthdate,$row->email,$row->phone_number,$row->summary,$row->image,$row->updated);
        return $personal_data;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Personal_data_schema::ID => $id
      ));
      $this->db->from(Personal_data_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
