<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookLending extends CI_Controller {

	private $settings;

	public function __construct()
	{
		parent::__construct();

		$this->settings = $this->setting_model->get();
	}

	public function index()
	{
		$data['settings'] = $this->settings;
		$data['title'] = 'Data Peminjaman';
		$data['lendings'] = $this->lending_model->all();

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('lending/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function create()
	{
		$this->form_validation->set_rules(
			'name', 'nama anggota',
			array('exact_length[8]', 'regex_match[/^M\d{7}$/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'title', 'judul buku',
			array('exact_length[8]', 'regex_match[/^B\d{7}$/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'start', 'tanggal pinjam',
			array('exact_length[10]', 'regex_match[/((19|20)\d{2})-(0[1-9]|1[1,2])-(0[1-9]|[12][0-9]|3[01])/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'end', 'tanggal kembali',
			array('exact_length[10]', 'regex_match[/((19|20)\d{2})-(0[1-9]|1[1,2])-(0[1-9]|[12][0-9]|3[01])/]', 'required', 'trim')
		);

		if ($this->form_validation->run() === FALSE)
		{
			$data['settings'] = $this->settings;
			$data['title'] = 'Tambah Data Peminjaman';
			$data['last_id'] = $this->lending_model->last();
			$data['members'] = $this->member_model->all();
			$data['books'] = $this->book_model->all();

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('lending/create');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			$this->lending_model->create();

			redirect('peminjaman');
		}
	}

	public function update($lending_id)
	{
		if ($this->lending_model->exists($lending_id) === FALSE)
		{
			show_404();

			return;
		}

		$this->form_validation->set_rules(
			'name', 'nama anggota',
			array('exact_length[8]', 'regex_match[/^M\d{7}$/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'title', 'judul buku',
			array('exact_length[8]', 'regex_match[/^B\d{7}$/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'start', 'tanggal pinjam',
			array('exact_length[10]', 'regex_match[/((19|20)\d{2})-(0[1-9]|1[1,2])-(0[1-9]|[12][0-9]|3[01])/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'end', 'tanggal kembali',
			array('exact_length[10]', 'regex_match[/((19|20)\d{2})-(0[1-9]|1[1,2])-(0[1-9]|[12][0-9]|3[01])/]', 'required', 'trim')
		);

		if ($this->form_validation->run() === FALSE)
		{
			$data['settings'] = $this->settings;
			$data['title'] = 'Ubah Data Peminjaman';
			$data['lending'] = $this->lending_model->get($lending_id);
			$data['members'] = $this->member_model->all();
			$data['books'] = $this->book_model->all();

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('lending/update');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			$this->lending_model->update($lending_id);

			redirect('peminjaman');
		}
	}

	public function delete()
	{
		if ($this->lending_model->exists($this->input->post('lending_id')) === FALSE)
		{
			show_404();

			return;
		}

		$this->lending_model->delete();

		redirect('peminjaman');
	}
}
