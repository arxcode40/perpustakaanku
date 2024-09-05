<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		/*if($this->session->has_userdata('auth') !== FALSE AND $this->auth_model->user_token_exists($this->session->userdata('auth')['user_token']) !== FALSE)
		{
			redirect('');
		}*/

		$this->session->set_tempdata('login_attempt', $this->session->tempdata('login_attempt') ?? 0, $this->login_attempt_expire);

		$this->form_validation->set_rules(
			'username', 'nama pengguna',
			array('max_length[16]', 'min_length[8]', 'regex_match[/^[a-z\d]+$/]', 'required', 'trim')
		);
		$this->form_validation->set_rules(
			'password', 'kata sandi',
			array('max_length[16]', 'min_length[8]', 'regex_match[/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W)(?!.*\s).+$/]', 'required', 'trim'),
			array(
				'regex_match' => 'Bidang {field} harus setidaknya 1 huruf besar, 1 huruf kecil, 1 angka, dan 1 karakter spesial.'
			)
		);

		if ($this->form_validation->run() === FALSE)
		{
			$data['title'] = 'Masuk';

			$this->load->view('templates/begin', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/end');
		}
		else
		{
			if ($this->session->tempdata('login_attempt') >= 2)
			{
				$this->session->set_flashdata(
					'alert',
					array(
						'icon' => 'x',
						'status' => 'danger',
						'text' => 'Terlalu banyak percobaan'
					)
				);

				redirect(uri_string());
			}

			$auth = $this->auth_model->attempt();

			if ($auth === NULL)
			{
				$this->session->set_flashdata(
					'alert',
					array(
						'status' => 'danger',
						'text' => 'Nama pengguna tidak ditemukan'
					)
				);

				redirect(uri_string());
			}

			if (password_verify($this->input->post('password'), $auth['password']) === FALSE)
			{
				$this->session->set_tempdata('login_attempt', ($this->session->tempdata('login_attempt') + 1) ?? 1, $this->login_attempt_expire);
				$this->session->set_flashdata(
					'alert',
					array(
						'status' => 'danger',
						'text' => 'Kata sandi pengguna salah'
					)
				);

				redirect(uri_string());
			}

			$this->session->unset_tempdata('login_attempt');
			$this->session->set_userdata(
				'auth',
				array(
					'user_id' => $auth['user_id'],
					'user_token' => $auth['user_token']
				)
			);

			redirect('');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('auth');

		redirect('masuk');
	}
}
