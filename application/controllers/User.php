<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data['profile'] = $this->user_model->get($this->session->userdata('auth_token'));

		if ($this->input->post('username') === $data['profile']['username'])
		{
			$rules['username'] = array('max_length[16]', 'min_length[8]', 'regex_match[/^[a-z\d]+$/]', 'required', 'trim');
		}
		else
		{
			$rules['username'] = array('is_unique[users.username]', 'max_length[16]', 'min_length[8]', 'regex_match[/^[a-z\d]+$/]', 'required', 'trim');
		}

		$this->form_validation->set_rules('username', 'nama pengguna', $rules['username']);
		$this->form_validation->set_rules(
			'current_password', 'kata sandi saat ini',
			array('max_length[16]', 'min_length[8]', 'regex_match[/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W)(?!.*\s).+$/]', 'trim'),
			array(
				'regex_match' => 'Bidang {field} harus setidaknya 1 huruf besar, 1 huruf kecil, 1 angka, dan 1 karakter spesial.'
			)
		);

		if ($this->form_validation->required($this->input->post('current_password')) === FALSE)
		{
			$rules['new_password'] = array('max_length[16]', 'min_length[8]', 'regex_match[/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W)(?!.*\s).+$/]', 'trim');
			$rules['confirm_password'] = array('trim');
		}
		else
		{
			$rules['new_password'] = array('max_length[16]', 'min_length[8]', 'regex_match[/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W)(?!.*\s).+$/]', 'required', 'trim');
			$rules['confirm_password'] = array('matches[new_password]', 'required', 'trim');
		}

		$this->form_validation->set_rules(
			'new_password', 'kata sandi baru',
			$rules['new_password'],
			array(
				'regex_match' => 'Bidang {field} harus setidaknya 1 huruf besar, 1 huruf kecil, 1 angka, dan 1 karakter spesial.'
			)
		);
		$this->form_validation->set_rules('confirm_password', 'konfirmasi kata sandi baru', $rules['confirm_password']);

		if ($this->form_validation->run() === FALSE)
		{
			$data['settings'] = $this->settings;
			$data['title'] = 'Profil Saya';

			$this->load->view('templates/begin', $data);
			$this->load->view('templates/navbar');
			$this->load->view('user/profile');
			$this->load->view('templates/scrolltop');
			$this->load->view('templates/footer');
			$this->load->view('templates/end');
		}
		else
		{
			if ($this->form_validation->required($this->input->post('current_password')) === TRUE)
			{
				if (password_verify($this->input->post('current_password'), $data['profile']['password']) === FALSE)
				{
					$this->session->set_flashdata(
						'alert',
						array(
							'icon' => 'x',
							'status' => 'danger',
							'text' => 'Kata sandi pengguna salah'
						)
					);

					redirect(uri_string());
				}

				if ($this->input->post('current_password') === $this->input->post('new_password'))
				{
					$this->session->set_flashdata(
						'alert',
						array(
							'icon' => 'x',
							'status' => 'danger',
							'text' => 'Kata sandi sudah usang'
						)
					);

					redirect(uri_string());
				}
			}

			$this->user_model->set($this->session->userdata('auth_token'));

			$profile = $this->user_model->get($this->session->userdata('auth_token'));
			unset($profile['password']);
			$profile['logged_at'] = mdate('%Y-%m-%d %H:%i:%s');
			
			$this->session->set_userdata('auth_token', base64_encode(json_encode($profile)));

			redirect('profil');
		}
	}
}
