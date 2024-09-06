<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookReturn extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Pengembalian';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('return/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function create($code)
	{
		redirect('pengembalian');
	}

	public function update($code)
	{
		$data['title'] = 'Ubah Data Pengembalian';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('return/update');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function delete($code)
	{
		redirect('pengembalian');
	}
}
