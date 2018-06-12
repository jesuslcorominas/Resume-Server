<?php
defined('BASEPATH') or exit('No direct script access allowed');
require( APPPATH . 'models/vo/Project_image.php');
require( APPPATH . 'models/schema/Project_image_schema.php');
class Project_image_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model','Project_model',TRUE);
    }

    public function all() {
      $this->db->from(Project_image_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $result = $get->result();
        $project_image_list = array();
        foreach($result as $row) {
          $project = $this->project_model->by_id($row->project_id);
          $project_image = new Project_image($row->id,$row->name,$project,$row->updated);
          array_push($project_image_list,$project_image);
        }
        return $project_image_list;
      }
      return FALSE;
    }

    public function by_id($id) {
      $this->db->where(array(
        Project_image_schema::ID => $id
      ));
      $this->db->from(Project_image_schema::TABLE);
      $get = $this->db->get();
      if($get->num_rows() > 0) {
        $row = $get->row();
        $project = $this->project_model->by_id($row->project_id);
        $project_image = new Project_image($row->id,$row->name,$project,$row->updated);
        return $project_image;
      }
      return FALSE;
    }

    public function exist($id) {
      $this->db->where(array(
        Project_image_schema::ID => $id
      ));
      $this->db->from(Project_image_schema::TABLE);
      $get = $this->db->get();
      return ($get->num_rows() > 0);
    }
}
