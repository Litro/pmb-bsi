<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if ($this->session->userdata('user_id'))
			redirect('dashboard');

		$this->load->helper(array('form'));
		$this->load->library(['form_validation']);
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
			$this->load->view('login');
		else
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users',['email' => $email])->row();

			if (!$user) {
				$this->session->set_flashdata('pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please check your email or password and try again.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect(uri_string());
			}

			if (!password_verify($password, $user->password))
			{
				$this->session->set_flashdata('pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Please check your email or password and try again.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect(uri_string());
			}

			$data = array(
				'user_id' => $user->user_id,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'email' => $user->email,
				'role_id' => $user->role_id,
			);

			$this->session->set_userdata($data);

			redirect('dashboard');
		}
	}
}
