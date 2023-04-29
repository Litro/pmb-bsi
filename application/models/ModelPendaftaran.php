<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPendaftaran extends CI_Model
{
	public function create($data = array())
	{
		$this->db->insert('pendaftaran', $data);
		return $this->db->get_where('pendaftaran', ['user_id' => $data['user_id']])->row();
	}
	
	public function get_data($user_id)
	{
		return $this->db->get_where('pendaftaran', ['user_id' => $user_id])->row();
	}
}

?>
