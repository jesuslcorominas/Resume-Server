<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'libraries/REST_Controller.php');
require_once(APPPATH . 'core/R.php');

class Service extends REST_Controller
{
    protected $r;

    public function __construct()
    {
        parent::__construct();
        $this->r = null;
        $this->load->model('Training_model','training_model',TRUE);
        $this->load->model('Experience_model','experience_model',TRUE);
        $this->load->model('Knowledge_model','knowledge_model',TRUE);        
        $this->load->model('Library_model','library_model',TRUE);
        $this->load->model('Other_data_model','other_data_model',TRUE);        
        $this->load->model('Personal_data_model','personal_data_model',TRUE);
        $this->load->model('Project_image_model','project_image_model',TRUE);
        $this->load->model('Project_library_model','project_library_model',TRUE);
        $this->load->model('Project_model','project_model',TRUE);
    }

    public function get_training_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->training_model->exist($id)) {
        $training = $this->training_model->by_id($id);
        $this->r = new R(0,'',$training->jsonSerialize());
        $this->response($this->r->get());
      }
    }

    public function training_get()
    {
      $training_list = $this->training_model->all();
      $this->r = new R(0,'',$training_list);
      $this->response($this->r->get());
    }

    public function get_experience_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->experience_model->exist($id)) {
        $experience = $this->experience_model->by_id($id);
        $this->r = new R(0,'',$experience->jsonSerialize());
        $this->response($this->r->get());
      }
    }

    public function experience_get()
    {
      $experience_list = $this->experience_model->all();
      $this->r = new R(0,'',$experience_list);
      $this->response($this->r->get());
    }


    public function get_knowledge_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->knowledge_model->exist($id)) {
        $knowledge = $this->knowledge_model->by_id($id);
        $this->r = new R(0,'',$knowledge->jsonSerialize());
        $this->response($this->r->get());
      }
    }

    public function knowledge_get()
    {
      $knowledge_list = $this->knowledge_model->all();
      $this->r = new R(0,'',$knowledge_list);
      $this->response($this->r->get());
    }

    // other_data
    public function get_other_data_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->other_data_model->exist($id)) {
        $other_data = $this->other_data_model->by_id($id);
        $this->r = new R(0,'',$other_data->jsonSerialize());
        $this->response($this->r->get());
      }
    }

    public function other_data_get()
    {
      $other_data_list = $this->other_data_model->all();
      $this->r = new R(0,'',$other_data_list);
      $this->response($this->r->get());
    }

    // other_training
    public function get_other_training_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->other_training_model->exist($id)) {
        $other_training = $this->other_training_model->by_id($id);
        $this->r = new R(0,'',$other_training->jsonSerialize());
        $this->response($this->r->get());
      }
    }

    public function other_training_get()
    {
      $other_training_list = $this->other_training_model->all();
      $this->r = new R(0,'',$other_training_list);
      $this->response($this->r->get());
    }


    public function library_get()
    {
      $library_list = $this->library_model->all();
      $this->r = new R(0,'',$library_list);
      $this->response($this->r->get());
    }


    public function get_library_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->library_model->exist($id)) {
        $library = $this->library_model->by_id($id);
        $this->r = new R(0,'',$library);
        $this->response($this->r->get());
      }
    }

    // personal_data
    public function get_personal_data_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->personal_data_model->exist($id)) {
        $personal_data = $this->personal_data_model->by_id($id);
        $this->r = new R(0,'',$personal_data->jsonSerialize());
        $this->response($this->r->get());
      }
    }

    public function personal_data_get()
    {
      $personal_data_list = $this->personal_data_model->all();
      $this->r = new R(0,'',$personal_data_list);
      $this->response($this->r->get());
    }

    // project_image
    public function get_project_image_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->project_image_model->exist($id)) {
        $project_image = $this->project_image_model->by_id($id);
        $this->r = new R(0,'',$project_image->jsonSerialize());
        $this->response($this->r->get());
      }
    }

    public function project_image_get()
    {
      $project_image_list = $this->project_image_model->all();
      $this->r = new R(0,'',$project_image_list);
      $this->response($this->r->get());
    }

    // project
    public function get_project_get()
    {
      $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
      if($this->project_model->exist($id)) {
        $project = $this->project_model->by_id($id);
        $this->r = new R(0,'',$project);
        $this->response($this->r->get());
      }
    }

    public function project_get()
    {
      $project_list = $this->project_model->all();
      $this->r = new R(0,'',$project_list);
      $this->response($this->r->get());
    }

}
