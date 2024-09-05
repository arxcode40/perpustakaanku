<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Anggota';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('member/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function create()
	{
		$data['title'] = 'Tambah Data Anggota';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('member/create');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function update($code)
	{
		$data['title'] = 'Ubah Data Anggota';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('member/update');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}

	public function delete($code)
	{
		redirect('anggota');
	}
}
