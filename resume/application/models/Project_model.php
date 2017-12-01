<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once( APPPATH . 'models/vo/Project.php');
require_once( APPPATH . 'models/vo/ProjectItem.php');
require_once( APPPATH . 'models/vo/Experience.php');
require_once( APPPATH . 'models/schema/Experience_schema.php');
require_once( APPPATH . 'models/schema/Project_schema.php');
class Project_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all() {
      $this->db->from(Project_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $project_list = array();
        foreach($result as $row) {
          $project = new Project($row->id,$row->name,$row->description,$row->platform,$row->icon,$row->path,$row->experience_id,$row->updated);
          array_push($project_list,$project);
        }
        return $project_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Project_schema::ID => $id
      ));
      $this->db->from(Project_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $this->db->where(array(
          Experience_schema::ID => $row->experience_id
        ));
        $this->db->from(Experience_schema::TABLE);
        $g = $this->db->get();
        $experience = null;
        if($g->num_rows() > 0) {
          $r = $g->row();
          $experience = new Experience($r->id,$r->company_name,$r->image,$r->start,$r->end,$r->position,$r->description,$r->updated);
        }
        $project = new ProjectItem($row->id,$row->name,$row->description,$row->platform,$row->icon,$row->path,$experience,$row->updated);
        $libraries = $this->library_model->by_project_id($row->id);
        $project_libraries = array(
          'project' => $project,
          'libraries' => $libraries
        );
        return $project_libraries;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Project_schema::ID => $id
      ));
      $this->db->from(Project_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
