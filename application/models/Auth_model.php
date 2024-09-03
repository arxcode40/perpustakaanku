<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function user_token_exists($user_token)
	{
		$this->db->where('user_token', $user_token);
		$this->db->limit(1);

		return (bool) $this->db->get('user')->num_rows();
	}

	public function attempt()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->limit(1);

		return $this->db->get('user')->row_array();
	}
}
