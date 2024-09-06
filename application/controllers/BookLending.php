<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookLending extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Peminjaman';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('lending/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function create()
	{
		$data['title'] = 'Tambah Data Peminjaman';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('lending/create');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function update($code)
	{
		$data['title'] = 'Ubah Data Peminjaman';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('lending/update');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function delete($code)
	{
		redirect('peminjaman');
	}
}
