<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookReturn extends CI_Controller {

	private $settings;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('setting_model');
		$this->load->model('auth_model');
		$this->load->model('lending_model');
		$this->load->model('return_model');

		// Middleware
		if ($this->session->has_userdata('auth_token') === FALSE OR $this->auth_model->user_token_exists($this->session->userdata('auth_token')) === FALSE)
		{
			redirect('masuk');
		}

		$this->settings = $this->setting_model->get();
	}

	public function index()
	{
		// Returns view
		$data['settings'] = $this->settings;
		$data['title'] = 'Data Pengembalian';
		$data['returns'] = $this->return_model->all();

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('return/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function create()
	{
		// Form validation rules
		$this->form_validation->set_rules(
			'id', 'transaksi peminjaman',
			array('exact_length[8]', 'regex_match[/^T\d{7}$/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'checkout_date', 'tanggal pengembalian',
			array('exact_length[10]', 'regex_match[/^((19|20)\d{2})-(0[1-9]|1[1,2])-(0[1-9]|[12][0-9]|3[01])$/]', 'required', 'trim')
		);

		// Run validation
		if ($this->form_validation->run() === FALSE)
		{			
			// Return create form
			$data['settings'] = $this->settings;
			$data['title'] = 'Tambah Data Pengembalian';
			$data['lendings'] = $this->lending_model->all();

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('return/create');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			// Create return data
			$this->return_model->create($this->settings['library_fines']);

			redirect('pengembalian');
		}
	}

	public function update($id)
	{
		// Check return data exists
		if ($this->return_model->exists($id) === FALSE)
		{
			show_404();

			return;
		}

		// Form validation rules
		$this->form_validation->set_rules(
			'checkout_date', 'tanggal pengembalian',
			array('exact_length[10]', 'regex_match[/^((19|20)\d{2})-(0[1-9]|1[1,2])-(0[1-9]|[12][0-9]|3[01])$/]', 'required', 'trim')
		);

		// Run validation
		if ($this->form_validation->run() === FALSE)
		{			
			// Return update form
			$data['settings'] = $this->settings;
			$data['title'] = 'Ubah Data Pengembalian';
			$data['return'] = $this->return_model->get($id);

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('return/update');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			// Update return
			$this->return_model->update($id, $this->settings['library_fines']);

			redirect('pengembalian');
		}

	}

	public function delete()
	{
		// Check return data exists
		if ($this->return_model->exists($this->input->post('id')) === FALSE)
		{
			show_404();

			return;
		}

		// Delete return data
		$this->return_model->delete();

		redirect('pengembalian');
	}

	public function report()
	{
		// Report view
		$data['settings'] = $this->settings;
		$data['settings']['application_theme'] = 'dark';
		$data['title'] = 'Laporan Data Pengembalian';
		$data['theme'] = 'light';
		$data['returns'] = $this->return_model->all();

		$this->load->view('templates/begin', $data);
		$this->load->view('return/report');
		$this->load->view('templates/end');
	}
}
