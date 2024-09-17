<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller {

	public function index()
	{
		$this->users();
		$this->settings();
	}

	public function users()
	{
		$data = array(
			'id' => nanoid(16),
			'username' => 'administrator',
			'password' => 'Wasd123@',
			'privilege' => 'Administrator'
		);

		$this->db->trans_start();
		$this->db->set($data);
		$this->db->insert('users');
		$this->db->trans_complete();
	}

	public function settings()
	{
		$data = array(
			array(
				'setting_name' => 'application_name',
				'setting_value' => 'PerpustakaanKu'
			),
			array(
				'setting_name' => 'application_theme',
				'setting_value' => 'light'
			),
			array(
				'setting_name' => 'library_fines',
				'setting_value' => 2000
			)
		);

		$this->db->trans_start();
		$this->db->set_insert_batch($data);
		$this->db->insert_batch('settings');
		$this->db->trans_complete();
	}

	public function members()
	{
		$data = array(
			array(
				'id' => 'M0000001',
				'fullname' => 'Arya Putra Sadewa',
				'gender' => 'Laki-laki',
				'email' => 'aryaputrasadewa40@gmail.com',
				'phone_number' => '0895339792382',
				'address' => 'Legok, Kab. Tangerang.',
				'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
				'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
			),
			array(
				'id' => 'M0000002',
				'fullname' => 'John Doe',
				'gender' => 'Laki-laki',
				'email' => 'johndoe@gmail.com',
				'phone_number' => '08123456789',
				'address' => '',
				'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
				'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
			)
		);

		$this->db->trans_start();
		$this->db->set_insert_batch($data);
		$this->db->insert_batch('members');
		$this->db->trans_complete();
	}

	public function books()
	{
		$data = array(
			array(
				'id' => 'B0000001',
				'title' => 'Kaifuku Jutsushi no Yarinaoshi',
				'publication_year' => 2017,
				'author' => 'Rui Tsukiyo',
				'publisher' => 'Young Ace UP',
				'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
				'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
			),
			array(
				'id' => 'B0000002',
				'title' => 'Isekai Meikyuu de Harem wo',
				'publication_year' => 2017,
				'author' => 'Shachi Sogano',
				'publisher' => 'Shounen Ace',
				'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
				'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
			)
		);

		$this->db->trans_start();
		$this->db->set_insert_batch($data);
		$this->db->insert_batch('books');
		$this->db->trans_complete();
	}

	public function transactions()
	{
		$data = array(
			array(
				'id' => 'T0000001',
				'member_id' => 'M0000001',
				'book_id' => 'B0000001',
				'lending_date' => mdate('%Y-%m-%d %H:%i:%s'),
				'return_date' => mdate('%Y-%m-%d %H:%i:%s'),
				'checkout_date' => mdate('%Y-%m-%d %H:%i:%s'),
				'fine' => 0,
				'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
				'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
			),
			array(
				'id' => 'T0000002',
				'member_id' => 'M0000002',
				'book_id' => 'B0000002',
				'lending_date' => mdate('%Y-%m-%d %H:%i:%s'),
				'return_date' => mdate('%Y-%m-%d %H:%i:%s'),
				'checkout_date' => mdate('%Y-%m-%d %H:%i:%s'),
				'fine' => 0,
				'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
				'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
			)
		);

		$this->db->trans_start();
		$this->db->set_insert_batch($data);
		$this->db->insert_batch('transactions');
		$this->db->trans_complete();
	}
}
