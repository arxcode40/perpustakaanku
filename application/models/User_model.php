<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get($auth_token)
	{
		$auth_token = json_decode(base64_decode($auth_token), TRUE);

		$this->db->where('id', $auth_token['id']);
		$this->db->limit(1);

		return $this->db->get('users')->row_array();
	}

	public function set($auth_token)
	{
		$auth_token = json_decode(base64_decode($auth_token), TRUE);
		$user_data = array('username' => $this->input->post('username'));

		if ($this->form_validation->required($this->input->post('current_password')) === TRUE)
		{
			$user_data['password'] = password_hash($this->input->post('new_password'), PASSWORD_DEFAULT);
		}

		$this->db->trans_start();
		$this->db->set($user_data);
		$this->db->where('id', $auth_token['id']);
		$this->db->update('users');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Profil gagal disimpan'
				)
			);
		}
		else
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'check',
					'status' => 'success',
					'text' => 'Profil berhasil disimpan'
				)
			);
		}

		$this->db->reset_query();
	}
}
