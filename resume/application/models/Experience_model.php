<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once( APPPATH . 'models/vo/Experience.php');
require_once( APPPATH . 'models/vo/ExperienceItem.php');
require_once( APPPATH . 'models/vo/Project.php');
require_once( APPPATH . 'models/vo/ProjectItem.php');
require_once( APPPATH . 'models/vo/ImageItem.php');
require_once( APPPATH . 'models/vo/Library.php');
require_once( APPPATH . 'models/schema/Experience_schema.php');
require_once( APPPATH . 'models/schema/Project_schema.php');
require_once( APPPATH . 'models/schema/ImageItem_schema.php');
require_once( APPPATH . 'models/schema/Project_library_schema.php');
require_once( APPPATH . 'models/schema/Library_schema.php');

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
			$this->db->where(array(
				Project_schema::EXPERIENCE_ID => $row->id
			));
			$this->db->from(Project_schema::TABLE);
			$projects_get = $this->db->get();
			$projects_list = array();
			if ($projects_get->num_rows() > 0) {
				$projects_result = $projects_get->result();
				
				foreach($projects_result as $project_row) {
					$this->db->where(array(
						ImageItem_schema::PROJECT_ID => $project_row->id
					));
					$this->db->from(ImageItem_schema::TABLE);
					$images_get = $this->db->get();
					$images_list = array();
					if ($images_get->num_rows() > 0) {
						$images_result = $images_get->result();
						foreach($images_result as $image_row) {							
							$image = new ImageItem($image_row->id,$image_row->name,$image_row->project_id,$image_row->updated);
							array_push($images_list, $image);
						}
					}
					
					$this->db->where(array(
						Project_library_schema::PROJECT_ID => $project_row->id
					));
					$this->db->from(Project_library_schema::TABLE);
					$project_library_get = $this->db->get();
					$libraries = array();
					if($project_library_get->num_rows() > 0) {
						$project_library_result = $project_library_get->result();						
						foreach($project_library_result as $project_library_row) {
							$this->db->where(array(
								Library_schema::ID => $project_library_row->library_id
							));
							$this->db->from(Library_schema::TABLE);
							$library_get = $this->db->get();
							if($library_get->num_rows() > 0) {
								$library_result = $library_get->result();
								foreach($library_result as $library_row) {
									$library = new Library($library_row->id,$library_row->name,$library_row->path,$library_row->description,$library_row->updated);
									array_push($libraries, $library);
								}
							}	
						}						
					}
					
					$project = new ProjectItem($project_row->id,$project_row->name,$project_row->description,$project_row->platform,$project_row->icon,$project_row->path,$project_row->updated,$images_list, $libraries);
					array_push($projects_list, $project);
				}
			}
			
          $experience = new ExperienceItem($row->id,$row->name,$row->image,$row->start,$row->end,$row->position,$row->description,$row->updated,$projects_list);
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
        $experience = new Experience($row->id,$row->name,$row->image,$row->start,$row->end,$row->position,$row->description,$row->updated);
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
