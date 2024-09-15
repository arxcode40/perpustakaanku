<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Middleware
		if ($this->session->has_userdata('auth_token') === FALSE OR $this->auth_model->user_token_exists($this->session->userdata('auth_token')) === FALSE)
		{
			redirect('masuk');
		}
	}

	public function index()
	{
		$this->form_validation->set_rules(
			'application_name', 'nama aplikasi',
			array('max_length[64]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'application_theme', 'tema aplikasi',
			array('in_list[light,dark]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'library_fines', 'denda perpustakaan',
			array('regex_match[/^([1-9][0-9]{0,2})(\.\d{3})*?$/]', 'required', 'trim')
		);

		if ($this->form_validation->run() === FALSE)
		{
			$data['settings'] = $this->setting_model->get();;
			$data['title'] = 'Pengaturan';

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('setting/home');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			$this->setting_model->set();

			redirect('pengaturan');
		}
	}
}
