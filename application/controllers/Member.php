<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	private $settings;

	public function __construct()
	{
		parent::__construct();

		// Middleware
		if ($this->session->has_userdata('auth_token') === FALSE OR $this->auth_model->user_token_exists($this->session->userdata('auth_token')) === FALSE)
		{
			redirect('masuk');
		}

		$this->settings = $this->setting_model->get();
	}

	public function index()
	{
		$data['settings'] = $this->settings;
		$data['title'] = 'Data Anggota';
		$data['members'] = $this->member_model->all();

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('member/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function create()
	{
		$this->form_validation->set_rules(
			'fullname', 'nama anggota',
			array('max_length[64]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'gender', 'jenis kelamin anggota',
			array('in_list[Laki-laki,Perempuan]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'email', 'email anggota',
			array('max_length[320]', 'required', 'trim', 'valid_email')
		);
		$this->form_validation->set_rules(
			'phone_number', 'nomor telepon anggota',
			array('max_length[16]', 'numeric', 'regex_match[/(08\d{2})(\d{4})(\d{1,})/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'address', 'alamat anggota',
			array('trim')
		);

		if ($this->form_validation->run() === FALSE)
		{
			$data['settings'] = $this->settings;
			$data['title'] = 'Tambah Data Anggota';
			$data['last_id'] = $this->member_model->last();

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('member/create');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			$this->member_model->create();

			redirect('anggota');
		}
	}

	public function update($id)
	{
		if ($this->member_model->exists($id) === FALSE)
		{
			show_404();

			return;
		}

		$this->form_validation->set_rules(
			'fullname', 'nama anggota',
			array('max_length[64]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'gender', 'jenis kelamin anggota',
			array('in_list[Laki-laki,Perempuan]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'email', 'email anggota',
			array('max_length[320]', 'required', 'trim', 'valid_email')
		);
		$this->form_validation->set_rules(
			'phone_number', 'nomor telepon anggota',
			array('max_length[16]', 'numeric', 'regex_match[/(08\d{2})(\d{4})(\d{1,})/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'address', 'alamat anggota',
			array('trim')
		);

		if ($this->form_validation->run() === FALSE)
		{
			$data['settings'] = $this->settings;
			$data['title'] = 'Ubah Data Anggota';
			$data['member'] = $this->member_model->get($id);

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('member/update');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			$this->member_model->update($id);

			redirect('anggota');
		}
	}

	public function delete()
	{
		if ($this->member_model->exists($this->input->post('id')) === FALSE)
		{
			show_404();

			return;
		}

		$this->member_model->delete();

		redirect('anggota');
	}

	public function report()
	{
		$data['settings'] = $this->settings;
		$data['settings']['application_theme'] = 'dark';
		$data['title'] = 'Laporan Data Anggota';
		$data['theme'] = 'light';
		$data['members'] = $this->member_model->all();

		$this->load->view('templates/begin', $data);
		$this->load->view('member/report');
		$this->load->view('templates/end');
	}
}
