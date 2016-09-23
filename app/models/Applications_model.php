<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications_model extends MY_Model {

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

/* End of file Applications_model.php */
/* Location: .//opt/lampp/htdocs/workshop/verify/app/models/Applications_model.php */