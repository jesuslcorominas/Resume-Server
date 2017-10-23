<?php
defined('BASEPATH') or exit('No direct script access allowed');
require( APPPATH . 'models/vo/Other_data.php');
require( APPPATH . 'models/schema/Other_data_schema.php');
class Other_data_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Other_data_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $other_data_list = array();
        foreach($result as $row) {
          $other_data = new Other_data($row->id,$row->name,$row->description,$row->updated);
          array_push($other_data_list,$other_data);
        }
        return $other_data_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Other_data_schema::ID => $id
      ));
      $this->db->from(Other_data_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $other_data = new Other_data($row->id,$row->name,$row->description,$row->updated);
        return $other_data;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Other_data_schema::ID => $id
      ));
      $this->db->from(Other_data_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
