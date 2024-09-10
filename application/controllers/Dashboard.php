<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $settings;

	public function __construct()
	{
		parent::__construct();

		$this->settings = $this->setting_model->get();
	}

	public function index()
	{
		$data['settings'] = $this->settings;
		$data['title'] = 'Dasbor';
		$data['total_members'] = $this->db->get('members')->num_rows();
		$data['total_books'] = $this->db->get('books')->num_rows();
		$data['total_lendings'] = $this->db->get('lendings')->num_rows();
		$data['total_returns'] = $this->db->get('returns')->num_rows();

		$this->load->view('templates/begin', $data);
		$this->load->view('templates/navbar');
		$this->load->view('dashboard/home');
		$this->load->view('templates/scrolltop');
		$this->load->view('templates/footer');
		$this->load->view('templates/end');
	}
}

