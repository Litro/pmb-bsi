<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('user_id'))
			redirect('login');

		$data['title'] = 'Dashboard';
		$data['user'] = $this->ModelUser->get_user_where(['user_id' => $this->session->userdata('user_id')]);

		$this->load->view('header', $data);
		if ($this->session->userdata('role_id') == 2)
			$this->load->view('dashboard');
		else
			$this->load->view('dashboard_user');
		$this->load->view('footer');
	}
}
