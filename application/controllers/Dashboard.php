<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dasbor';

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('dashboard/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}
}

