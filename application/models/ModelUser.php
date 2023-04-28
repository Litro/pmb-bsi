<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model
{
	public function get_user_where($data = array())
	{
		return $this->db->get_where('users', $data)->row();
	}

	public function get_profile_where($user_id)
	{
		return $this->db->get_where('profile', ['user_id' => $user_id])->row();
	}
	
	public function update_user($data = array(), $where = array())
	{
		return $this->db->update('users', $data, $where);
	}
	
	public function register($data = array())
	{
		$this->db->insert('users', $data);
		$user_id = $this->db->insert_id();
		$this->db->insert('profile', array('user_id' => $user_id));
		return $user_id;
	}
}

?>
