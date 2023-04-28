<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('user_id'))
			redirect('dashboard');

		$this->load->helper(array('form'));
		$this->load->library(['form_validation']);
	}

	public function index()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim', [
			'required' => 'Please enter a your first name!',
		]);

		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim', [
			'required' => 'Please enter a your last name!',
		]);

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Please enter a valid Email adddress!',
			'valid_email' => 'Please enter a valid xEmail adddress!',
		]);

		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Please enter a password',
		]);

		if ($this->form_validation->run() == FALSE)
			$this->load->view('register');
		else
		{
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users',['email' => $email])->row();

			if ($user)
			{
				$this->session->set_flashdata('pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Email has been registered, Please use another email.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect(uri_string());
			}
			
			$data = array(
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'role_id' => 1,
			);
			
			$data['user_id'] = $this->ModelUser->register($data);

			$this->session->set_userdata($data);

			redirect('profile');
		}
	}
}
