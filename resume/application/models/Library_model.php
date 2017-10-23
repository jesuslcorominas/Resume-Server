<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once( APPPATH . 'models/vo/Library.php');
require_once( APPPATH . 'models/schema/Library_schema.php');
class Library_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Library_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $library_list = array();
        foreach($result as $row) {
          $library = new Library($row->id,$row->name,$row->path,$row->description,$row->updated);
          array_push($library_list,$library);
        }
        return $library_list;
      }
      return FALSE;
    }

    public function by_project_id($id) {
      $this->db->where(array(
        'project_id' => $id
      ));
      $this->db->from('project_library');
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $libraries = array();
        foreach($get->result() as $row) {
          $library_id = $row->library_id;
          $this->db->where(array(
            'id' => $library_id
          ));
          $this->db->from('library');
          $get = $this->db->get();
          if($get->num_rows() > 0) {
            foreach($get->result() as $row) {
              $library = new Library($row->id,$row->name,$row->path,$row->description,$row->updated);
              array_push($libraries,$library->jsonSerialize());
            }
          }
        }
        return $libraries;
      }
      return FALSE;
    }
    public function by_id($id) {
      $this->db->where(array(
        Library_schema::ID => $id
      ));
      $this->db->from(Library_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $library = new Library($row->id,$row->name,$row->path,$row->description,$row->updated);
        $projects = $this->project_library_model->by_library_id($row->id);
        $library_projects = array(
          'library' => $library,
          'projects' => $projects
        );
        return $library_projects;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Library_schema::ID => $id
      ));
      $this->db->from(Library_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
