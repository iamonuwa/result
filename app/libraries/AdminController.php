<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// if(!$this->aauth->is_loggedin()){
		// 	redirect(base_url(),'refresh');
		// }
		// if(!$this->aauth->is_member('Admin')){
		// 	show_404("You are not authorized to view this page");
		// }
	}



}

/* End of file AdminController.php */
/* Location: .//opt/lampp/htdocs/workshop/verify/app/libraries/AdminController.php */