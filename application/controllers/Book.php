<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	private $settings;

	public function __construct()
	{
		parent::__construct();

		$this->settings = $this->setting_model->get();
	}

	public function index()
	{
		$data['settings'] = $this->settings;
		$data['title'] = 'Data Buku';
		$data['books'] = $this->book_model->all();

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('book/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function create()
	{
		$this->form_validation->set_rules(
			'title', 'judul buku',
			array('max_length[64]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'publication_year', 'tahun terbit buku',
			array('exact_length[4]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'author', 'pengarang buku',
			array('max_length[64]', 'trim')
		);
		$this->form_validation->set_rules(
			'publisher', 'penerbit buku',
			array('max_length[64]', 'trim')
		);

		if ($this->form_validation->run() === FALSE)
		{
			$data['settings'] = $this->settings;
			$data['title'] = 'Tambah Data Buku';
			$data['last_id'] = $this->book_model->last();

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('book/create');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			$this->book_model->create();

			redirect('buku');
		}
	}

	public function update($id)
	{
		if ($this->book_model->exists($id) === FALSE)
		{
			show_404();

			return;
		}

		$this->form_validation->set_rules(
			'title', 'judul buku',
			array('max_length[64]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'publication_year', 'tahun terbit buku',
			array('exact_length[4]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'author', 'pengarang buku',
			array('max_length[64]', 'trim')
		);
		$this->form_validation->set_rules(
			'publisher', 'penerbit buku',
			array('max_length[64]', 'trim')
		);

		if ($this->form_validation->run() === FALSE)
		{
			$data['settings'] = $this->settings;
			$data['title'] = 'Ubah Data Buku';
			$data['book'] = $this->book_model->get($id);

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('book/update');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			$this->book_model->update($id);

			redirect('buku');
		}
	}

	public function delete()
	{
		if ($this->book_model->exists($this->input->post('id')) === FALSE)
		{
			show_404();

			return;
		}

		$this->book_model->delete();

		redirect('buku');
	}
}
