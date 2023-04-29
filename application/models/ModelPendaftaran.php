<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPendaftaran extends CI_Model
{
	public function create($data = array())
	{
		$this->db->insert('pendaftaran', $data);
	}
}

?>
