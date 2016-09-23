<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		if(!$this->aauth->is_loggedin()){
			redirect(base_url(),'refresh');
		}
		$this->pageTitle = $this->aauth->get_user()->name. ' - Results Management';
		$data['applications'] = $this->applications_model->get_many_by('receipient', $this->aauth->get_user()->id);
		$this->load->view('results/index', $data);
	}


	public function create()
	{
		if($this->input->post()){
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
				if ($this->form_validation->run() == TRUE) {
					$name = $this->input->post('name');
					$email = $this->input->post('email');
					$password = "password";
					if($this->aauth->create_user($email, $password, $name)){
						$this->session->set_flashdata('success', 'Account has created.');
						// redirect(base_url('admin/accounts/create'.$id),'refresh');
					}
					else{
						$this->session->set_flashdata('msg', $this->aauth->print_errors());
						// redirect(base_url('admin/accounts/create'.$id),'refresh');
					}
				} else {
						$this->session->set_flashdata('msg', validation_errors());
						// redirect(base_url('admin/accounts/create'.$id),'refresh');
				}
			}
			$this->pageTitle = "Add Result";
			$this->load->view('results/create');
	}

	public function edit($id)
	{
			if($this->input->post()){
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
				if ($this->form_validation->run() == TRUE) {
					$name = $this->input->post('name');
					$email = $this->input->post('email');
					if($this->aauth->update_user($id, $email, $name)){
						$this->session->set_flashdata('success', 'Account has updated.');
						redirect(base_url('admin/accounts/'.$id),'refresh');
					}
					else{
						$this->session->set_flashdata('msg', $this->aauth->print_errors());
						redirect(base_url('admin/accounts/'.$id),'refresh');
					}
				} else {
						$this->session->set_flashdata('msg', validation_errors());
						redirect(base_url('admin/accounts/'.$id),'refresh');
				}
			}
			$this->pageTitle = "Modify Account";
			$data['account'] = $this->aauth->get_user($id);
			$this->load->view('admin/edit', $data);
	}


	public function delete($id)
	{
		if($this->aauth->get_user()->id == $id){
			$this->session->set_flashdata('msg', 'You cannot remove yourself');
			redirect(base_url('admin/index'),'refresh');
		}
		else{
			if($this->aauth->delete_user($id)){
				$this->session->set_flashdata('success', 'Account has been removed');
				redirect(base_url('admin/index'),'refresh');
			}
			else{
				$this->session->set_flashdata('msg', $this->aauth->print_errors());
				redirect(base_url('admin/index'),'refresh');
			}
		}
	}
}

/* End of file Result.php */
/* Location: .//opt/lampp/htdocs/workshop/verify/app/controllers/Result.php */