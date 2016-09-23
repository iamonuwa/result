<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mail extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $data['subject'] = "Result Verification";
		// $data['exam_body'] = 
		// $this->load->view('templates/found_template', $data);

		$data['exam_year'] = '2008';
		$data['exam_type'] = 'MAY/JUNE';
		$data['grades'] = json_encode(array(
										'ENGLISH'=>'B2',
										'MATHEMATICS' => 'C5',
										'PHYSICS' => 'A1',
										'IGBO LANGUAGE' => 'A1',
										'CHEMISTRY' => 'C3',
										'BIOLOGY' => 'A1'
								));
		$data['seat_number'] = '4010956026';
		$data['name'] = 'JOHN DOE';
		$data['age'] = '18';
		$data['receipient'] = '2';
		$data['passport'] = 'default.jpg';
		$data['created_on'] = date('Y-m-d h:i:s');

		$this->applications_model->insert($data);






		$data = $this->applications_model->get_by('seat_number', '4010956023');
		$json = json_decode($data->grades);
		foreach ($json as $key => $value) {
			echo $key .' '. $value .'<br>';
		}
	}

}

/* End of file Mail.php */
/* Location: .//opt/lampp/htdocs/workshop/verify/app/controllers/Mail.php */