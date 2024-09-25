<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if ($this->input->is_cli_request() === FALSE)
		{
			show_404();
		}
	}

	public function index()
	{
		$this->users();
		$this->settings();
	}

	public function users()
	{
		$this->load->helper('string');

		$data = array(
			'id' => random_string('alnum', 16),
			'username' => 'administrator',
			'password' => password_hash('Wasd123@', PASSWORD_DEFAULT),
			'privilege' => 'Administrator'
		);

		$this->db->trans_start();
		$this->db->set($data);
		$this->db->insert('users');
		$this->db->trans_complete();
	}

	public function settings()
	{
		$data = array(
			array(
				'setting_name' => 'application_name',
				'setting_value' => 'PerpustakaanKu'
			),
			array(
				'setting_name' => 'application_theme',
				'setting_value' => 'light'
			),
			array(
				'setting_name' => 'library_fines',
				'setting_value' => 2000
			)
		);

		$this->db->trans_start();
		$this->db->set_insert_batch($data);
		$this->db->insert_batch('settings');
		$this->db->trans_complete();
	}
}
