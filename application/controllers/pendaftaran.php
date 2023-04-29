<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_id'))
			redirect('login');

		$this->load->helper(array('form'));
		$this->load->library(['form_validation']);
	}

	public function index()
	{
		$data['title'] = 'Pendaftaran';
		$data['user'] = $this->ModelUser->get_user_where(['user_id' => $this->session->userdata('user_id')]);
		$data['profile'] = $this->ModelUser->get_profile_where($this->session->userdata('user_id'));
		
		$config = [
			[
				'field' => 'nisn',
				'label' => 'Nisn',
				'rules' => ['trim', 'required'],
				'errors' => [
					'required' => 'Please input your NISN',
				],
			],
			[
				'field' => 'nik',
				'label' => 'NIK',
				'rules' => ['trim', 'required'],
				'errors' => [
					'required' => 'Please input your NIK',
				],
			],
			[
				'field' => 'name',
				'label' => 'Nama',
				'rules' => ['trim', 'required'],
				'errors' => [
					'required' => 'Please input your name',
				],
			],
			[
				'field' => 'gender',
				'label' => 'Gender',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please choose your gender',
				],
			],
			[
				'field' => 'religion',
				'label' => 'Religion',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please choose your religion',
				],
			],
			[
				'field' => 'birthplace',
				'label' => 'Birth Place',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your birth place',
				],
			],
			[
				'field' => 'birthdate',
				'label' => 'Birth Date',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your birth date',
				],
			],
			[
				'field' => 'photo',
				'label' => 'Photo',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your photo',
				],
			],
			[
				'field' => 'address',
				'label' => 'Address',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your address',
				],
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => ['trim', 'required', 'valid_email'],
				'errors' => [
					'required' => 'Please input your email',
					'valid_email' => 'Please input a valid Email adddress!',
				],
			],
			[
				'field' => 'phone',
				'label' => 'Phone',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your phone',
				],
			],
			[
				'field' => 'phone',
				'label' => 'Phone',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your phone',
				],
			],
			[
				'field' => 'phone',
				'label' => 'Phone',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your phone',
				],
			],
			[
				'field' => 'faculty',
				'label' => 'Fakultas',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please choose your fakultas',
				],
			],
			[
				'field' => 'programStudy',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please choose your prodi',
				],
			],
			[
				'field' => 'fatherName',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your father name',
				],
			],
			[
				'field' => 'fatherJob',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please choose your father job',
				],
			],
			[
				'field' => 'fatherPhone',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your father phone',
				],
			],
			[
				'field' => 'fatherIncome',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please choose your father income',
				],
			],
			[
				'field' => 'motherName',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your mother name',
				],
			],
			[
				'field' => 'motherjob',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please choose your mother job',
				],
			],
			[
				'field' => 'matherPhone',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please input your mother phone',
				],
			],
			[
				'field' => 'motherIncome',
				'label' => 'Prodi',
				'rules' => ['trim', 'required',],
				'errors' => [
					'required' => 'Please choose your mother income',
				],
			],
		];
		
		$this->form_validation->set_rules($config);

		$this->load->view('header', $data);

		if ($this->form_validation->run() == FALSE)
			$this->load->view('pendaftaran');
		else {
			$nisn = $this->input->post('nisn');
			$nik = $this->input->post('nik');
			$name = $this->input->post('name');
			$gender = $this->input->post('gender');
			$religion = $this->input->post('religion');
			$birthplace = $this->input->post('birthplace');
			$birthdate = $this->input->post('birthdate');
			$photo = $this->input->post('photo');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$faculty= $this->input->post('faculty');
			$programStudy= $this->input->post('programStudy');
			$fatherName= $this->input->post('fathername');
			$fatherJob= $this->input->post('fatherJob');
			$fatherPhone= $this->input->post('fatherPhone');
			$fatherIncome= $this->input->post('fatherIncome');
			$motherName= $this->input->post('motherName');
			$motherJob= $this->input->post('motherJob');
			$matherPhone= $this->input->post('matherPhone');
			$motherIncome= $this->input->post('motherIncome');
		
			// create array
			$data = array(
				'user_id' => $this->session->userdata('user_id'),
				'nisn' => $nisn,
				'nik' => $nik,
				'name' => $name,
				'gender' => $gender,
				'religion' => $religion,
				'birthplace' => $birthplace,
				'birthdate' => $birthdate,
				'photo' => $photo,
				'address' => $address,
				'email' => $email,
				'phone' => $phone,
				'fakultas' => $faculty,
				'prodi' => $programStudy,
				'father' => $fatherName,
				'fatherjob' => $fatherJob,
				'fatherphone' => $fatherPhone,
				'fatherincome' => $fatherIncome,
				'mother' => $motherName,
				'motherjob' => $motherJob,
				'motherphone' => $matherPhone,
				'motherincome' => $motherIncome,
			);
			
		$this->ModelPendaftaran->create($data);
			
			// save to sql db
			$this->load->view('pendaftaran');			
		}
		$this->load->view('footer');

		//$this->load->view('header', $data);
		//$this->load->view('pendaftaran');			
		//$this->load->view('footer');
	}
}
