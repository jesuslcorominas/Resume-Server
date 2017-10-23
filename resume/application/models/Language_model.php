<?php
defined('BASEPATH') or exit('No direct script access allowed');
require( APPPATH . 'models/vo/Language.php');
require( APPPATH . 'models/schema/Language_schema.php');
class Language_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Language_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $language_list = array();
        foreach($result as $row) {
          $language = new Language($row->id,$row->name,$row->level,$row->updated);
          array_push($language_list,$language);
        }
        return $language_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Language_schema::ID => $id
      ));
      $this->db->from(Language_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $language = new Language($row->id,$row->name,$row->level,$row->updated);
        return $language;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Language_schema::ID => $id
      ));
      $this->db->from(Language_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
