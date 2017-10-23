<?php
defined('BASEPATH') or exit('No direct script access allowed');
require( APPPATH . 'models/vo/Knowledge.php');
require( APPPATH . 'models/schema/Knowledge_schema.php');
class Knowledge_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Knowledge_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $knowledge_list = array();
        foreach($result as $row) {
          $knowledge = new Knowledge($row->id,$row->name,$row->image,$row->type,$row->level,$row->updated);
          array_push($knowledge_list,$knowledge);
        }
        return $knowledge_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Knowledge_schema::ID => $id
      ));
      $this->db->from(Knowledge_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $knowledge = new Knowledge($row->id,$row->name,$row->image,$row->type,$row->level,$row->updated);
        return $knowledge;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Knowledge_schema::ID => $id
      ));
      $this->db->from(Knowledge_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
