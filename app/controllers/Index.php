<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->aauth->is_loggedin() && $this->aauth->is_member('default')){
			redirect(base_url('accounts/index'),'refresh');
		}
		elseif($this->aauth->is_loggedin() && $this->aauth->is_member('public')){
			redirect(base_url('accounts/index'),'refresh');
		}
		elseif($this->aauth->is_loggedin() && $this->aauth->is_member('admin')){
			redirect(base_url('admin/index'),'refresh');
		}
		$this->pageTitle = "Homepage";
		$this->load->view('welcome_message');
	}
	
	public function login()
	{
		if($this->aauth->is_loggedin() && $this->aauth->is_member('default')){
			redirect(base_url('accounts/index'),'refresh');
		}
		elseif($this->aauth->is_loggedin() && $this->aauth->is_member('public')){
			redirect(base_url('accounts/index'),'refresh');
		}
		elseif($this->aauth->is_loggedin() && $this->aauth->is_member('admin')){
			redirect(base_url('admin/index'),'refresh');
		}
		if($this->input->post()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($this->aauth->login($email, $password)){
				if($this->aauth->is_member('Admin')){
					redirect(base_url('admin/index'),'refresh');
				}
				elseif($this->aauth->is_member('default')){
				redirect(base_url('accounts/index'),'refresh');
				}
				elseif($this->aauth->is_member('public')){
				redirect(base_url('accounts/index'),'refresh');
				}
			}
			else{
				$this->session->set_flashdata('msg', $this->aauth->print_errors());
				redirect(base_url('index/login'),'refresh');
			}
		}
		else{
		$this->pageTitle = "Signin here.";
		$this->load->view('auth/login');
		}
	}

	public function reset()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				if($this->aauth->check_email($email)){
					if ($this->aauth->remind_password($email)) {
						$this->session->set_flashdata('success', 'A password reset link has been sent your mailbox');
						redirect(base_url('index/reset'),'refresh');
					}
					else{
						$this->session->set_flashdata('msg', $this->aauth->print_errors());
						redirect(base_url('index/reset'),'refresh');
					}
				}
				else{
					$this->session->set_flashdata('msg', 'Email Address does not exist on our servers');
					redirect(base_url('index/reset'),'refresh');
				}
			} else {
				$this->session->set_flashdata('msg', validation_errors());
					redirect(base_url('index/reset'),'refresh');
			}
		}
		else{
			$this->pageTitle = "Reset Password";
			$this->load->view('auth/reset');
		}
	}
	
}
