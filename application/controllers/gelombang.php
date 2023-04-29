<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gelombang extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_id'))
			redirect('login');

		$this->load->helper(array('form'));
		$this->load->library(['form_validation']);
	}

	public function index()
	{
		$data['title'] = 'Jadawal Gelombang';
		$data['user'] = $this->ModelUser->get_user_where(['user_id' => $this->session->userdata('user_id')]);
		
		$this->load->view('header', $data);
		$this->load->view('gelombang');
		$this->load->view('footer');
	}
}
