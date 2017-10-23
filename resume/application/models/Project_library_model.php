<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once( APPPATH . 'models/vo/Project_library.php');
require_once( APPPATH . 'models/schema/Project_library_schema.php');
class Project_library_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model','project_model',TRUE);
        $this->load->model('Library_model','library_model',TRUE);
    }

    public function all() {
      $this->db->from(Project_library_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $project_library_list = array();
        foreach($result as $row) {
          $project = $this->project_model->by_id($row->project_id);
          $library = $this->library_model->by_id($row->library_id);
          $project_library = new Project_library($project,$library);
          array_push($project_library_list,$project_library);
        }
        return $project_library_list;
      }
      return FALSE;
    }

    public function by_library_id($id) {
        $this->db->where(array(
          'library_id' => $id
        ));
        $this->db->from('project_library');
        $get = $this->db->get();
        if($get->num_rows() > 0) {
          $result = $get->result();
          $projects = array();
          foreach($result as $row) {
            $project_id = $row->project_id;
            $this->db->where(array(
              'id' => $project_id
            ));
            $this->db->from('project');
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
                $experience = new Experience($r->id,$r->company_name,$r->image,$r->start,$r->end,$r->description,$r->updated);
              }
              $project = new ProjectItem($row->id,$row->name,$row->description,$row->platform,$row->icon,$row->path,$experience->jsonSerialize(),$row->updated);
              array_push($projects,$project);
            }
          }
          return $projects;
        }
        return FALSE;
    }

    public function by_project_id($id) {
      $this->db->where(array(
        Project_library_schema::PROJECT_ID => $id
      ));
      $this->db->from(Project_library_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $libraries = array();
        foreach($result as $relation) {
          $library_id = $relation->library_id;
          $lib = $this->library_model->by_id($library_id);
          array_push($libraries,$lib->jsonSerialize());
        }
        $project = $this->project_model->by_id($id);
        $project_library = new Project_library($project,$library);
        return $project_library;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Project_library_schema::PROJECT_ID => $id
      ));
      $this->db->from(Project_library_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
