<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class MY_Controller extends CI_Controller {

	protected $is_super;
	protected $company_id;
	protected $role_id;

	public function __construct() {
		parent::__construct ();
		if (! $this->session->has_userdata ( 'sess_is_super' )) {
			redirect ( "home" );
		}
		$this->is_super = $this->session->userdata('sess_is_super');
		if(!$this->is_super) {
			$this->company_id = $this->session->userdata('sess_company_id');
			$this->role_id = $this->session->userdata('sess_role_id');
		}
	}

}
