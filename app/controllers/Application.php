<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->pageTitle = "Create new Application";
		$data['applicants'] = $this->applicants_model->get_all();
		$this->load->view('applications/index', $data);
	}

	public function create()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('seat_number', 'Seat Number', 'trim|required|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
			$this->form_validation->set_rules('exam_body', 'Exam Body', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$data['seat_number'] = $this->input->post('seat_number');
				$data['email'] = $this->input->post('email');
				$data['phone'] = $this->input->post('phone');
				$data['exam_body'] = $this->input->post('exam_body');
				$data['created_on'] = date('Y-m-d h:i:s');
				$check = $this->applicants_model->get_many_by('seat_number', $data['seat_number']);
				if($check == NULL){
					if($this->applicants_model->insert($data)){
						$this->session->set_flashdata('success', 'Your application has been submitted. You\'ll get notified via email once it has been verified.');
						redirect(base_url('application/create'),'refresh');
					}
					else{
						$this->session->set_flashdata('msg', 'Internal Server error. Please try again');
						redirect(base_url('application/create'),'refresh');
					}
				}
				else{
				$this->session->set_flashdata('msg', 'Application already exists for <strong>'. $this->aauth->get_user($check[0]->exam_body)->name.'.</strong>');
				}
			} else {
				$this->session->set_flashdata('msg', validation_errors());
				redirect(base_url('application/create'),'refresh');
			}
		}
		$this->pageTitle = "Verification Application form";
		$data['exam_body'] = $this->aauth->list_users();
		$this->load->view('applications/create', $data);
	}

	public function delete($id)
	{
		if($this->applicants_model->delete($id)){
			redirect(base_url('accounts/index'),'refresh');
		}
	}

	public function search($id)
	{
		$applicant = $this->applicants_model->get_by(array('id' => $id, 'status' => '0'));
		$application = $this->applications_model->get_by('seat_number', $applicant->seat_number);
		if($application){
			$this->session->set_flashdata('success', 'Application with Seat Number <strong>#'. $applicant->seat_number.'</strong> is valid. Click <a href="'.base_url('application/mail/'.$applicant->seat_number).'">here</a> to notify applicant');
			redirect(base_url('accounts/index'),'refresh');
		}
		else{
			$this->session->set_flashdata('msg', 'Application with Seat Number <strong>#'. $applicant->seat_number.'</strong> is invalid. Does not exist on our database. Click <a href="'.base_url('application/seat/'.$id).'">here</a> to notify applicant');
			redirect(base_url('accounts/index'),'refresh');
		}
	}

	public function send_not_found_mail($id)
	{
		$applicant = $this->applicants_model->get_by('id', $id);
		$data['receipient_email'] = $applicant->email;
		$data['receipient_number'] = $applicant->seat_number;
		$data['exam_body'] = $this->aauth->get_user($applicant->exam_body)->name;
		$data['subject'] = "Re: Invalid Seat Number";
		$mail = send_not_found($data);
		if($mail == TRUE){
			$this->session->set_flashdata('success', 'An email notification has been sent to applicant <strong>(#'.$applicant->seat_number.')</strong>');
			$this->applicants_model->delete($id);
			redirect(base_url('accounts/index'),'refresh');
		}
		else{
			$this->session->set_flashdata('msg', 'An error occured. Please try again later');
			redirect(base_url('accounts/index'),'refresh');
		}
	}

	public function found_mail($id)
	{
		$data['application'] = $this->applications_model->get_by('seat_number', $id);
		$applicant = $this->applicants_model->get_by('seat_number', $id);
		$data['exam_body'] = $this->aauth->get_user($data['application']->receipient)->name;
		$data['receipient_email'] = $applicant->email;
		$data['receipient_number'] = $applicant->seat_number;
		$data['subject'] = "Re: Result is valid";
		$mail = send_mail($data);
		if($mail == TRUE){
			$this->session->set_flashdata('success', 'An email notification has been sent to applicant <strong>(#'.$id.')</strong>');
			$this->applicants_model->delete($applicant->id);
			redirect(base_url('accounts/index'),'refresh');
		}
		else{
			$this->session->set_flashdata('msg', 'An error occured. Please try again later');
			redirect(base_url('accounts/index'),'refresh');
		}
	}



}

/* End of file Application.php */
/* Location: .//opt/lampp/htdocs/workshop/verify/app/controllers/Application.php */