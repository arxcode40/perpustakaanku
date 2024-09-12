<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

	public function last()
	{
		$result = $this->db->get('books')->last_row('array');
		$last_id = intval(substr($result['id'], 1));

		return 'B' . str_repeat(0, 7 - strlen($last_id)) . ++$last_id;
	}

	public function exists($id)
	{
		$this->db->where('id', $id);
		$this->db->limit(1);

		return (bool) $this->db->get('books')->num_rows();
	}

	public function all()
	{
		return $this->db->get('books')->result_array();
	}

	public function get($id)
	{
		$this->db->where('id', $id);
		$this->db->limit(1);

		return $this->db->get('books')->row_array();
	}

	public function create()
	{
		$book_data = array(
			'id' => $this->last(),
			'title' => $this->input->post('title'),
			'publication_year' => (int) $this->input->post('publication_year'),
			'author' => $this->input->post('author'),
			'publisher' => $this->input->post('publisher'),
			'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		$this->db->trans_start();
		$this->db->set($book_data);
		$this->db->insert('books');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Data buku gagal ditambahkan'
				)
			);
		}
		else
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'check',
					'status' => 'success',
					'text' => 'Data buku berhasil ditambahkan'
				)
			);
		}
	}

	public function update($id)
	{
		$book_data = array(
			'title' => $this->input->post('title'),
			'publication_year' => (int) $this->input->post('publication_year'),
			'author' => $this->input->post('author'),
			'publisher' => $this->input->post('publisher'),
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		$this->db->trans_start();
		$this->db->set($book_data);
		$this->db->where('id', $id);
		$this->db->update('books');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Data buku gagal diubah'
				)
			);
		}
		else
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'check',
					'status' => 'success',
					'text' => 'Data buku berhasil diubah'
				)
			);
		}

		$this->db->reset_query();
	}

	public function delete()
	{
		$this->db->trans_start();
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('books');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Data buku gagal dihapus'
				)
			);
		}
		else
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'check',
					'status' => 'success',
					'text' => 'Data buku berhasil dihapus'
				)
			);
		}

		$this->db->reset_query();
	}
}
