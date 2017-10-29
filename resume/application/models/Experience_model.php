<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once( APPPATH . 'models/vo/Experience.php');
require_once( APPPATH . 'models/schema/Experience_schema.php');
class Experience_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Experience_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $experience_list = array();
        foreach($result as $row) {
          $experience = new Experience($row->id,$row->company_name,$row->image,$row->start,$row->end,$row->position,$row->description,$row->updated);
          array_push($experience_list,$experience);
        }
        return $experience_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Experience_schema::ID => $id
      ));
      $this->db->from(Experience_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $experience = new Experience($row->id,$row->company_name,$row->image,$row->start,$row->end,$row->position,$row->description,$row->updated);
        return $experience;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Experience_schema::ID => $id
      ));
      $this->db->from(Experience_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
