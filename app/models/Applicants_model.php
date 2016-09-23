<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicants_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
	}

    /**
     * This model's default primary key or unique identifier.
     * Used by the get(), update() and delete() functions.
     */
    protected $primary_key = 'id';

}

/* End of file Applicants_model.php */
/* Location: .//opt/lampp/htdocs/workshop/verify/app/models/Applicants_model.php */