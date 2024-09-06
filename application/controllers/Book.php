<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Buku';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('book/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function create()
	{
		$data['title'] = 'Tambah Data Buku';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('book/create');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function update($code)
	{
		$data['title'] = 'Ubah Data Buku';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('book/update');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function delete($code)
	{
		redirect('buku');
	}
}
