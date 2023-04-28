<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_id'))
			redirect('login');

		$this->load->helper(array('form'));
		$this->load->library(['form_validation']);
	}

	public function change()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}

	public function index()
	{
		$data['title'] = 'Profile';
		$data['user'] = $this->ModelUser->get_user_where(['user_id' => $this->session->userdata('user_id')]);
		$data['profile'] = $this->ModelUser->get_profile_where($this->session->userdata('user_id'));
		
		$this->load->view('header', $data);
		$this->load->view('profile', $data);
		$this->load->view('footer');
	}
}
