<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(!$this->aauth->is_loggedin()){
			redirect(base_url(),'refresh');
		}
		$this->pageTitle = $this->aauth->get_user()->name. ' Dashboard';
		$data['users'] = $this->aauth->list_users($group_par = FALSE, $limit = FALSE, $offset = FALSE, $include_banneds = TRUE);
		$this->load->view('admin/index', $data);
	}
}

/* End of file Admin.php */
/* Location: .//opt/lampp/htdocs/workshop/verify/app/controllers/Admin.php */