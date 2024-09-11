<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lending_model extends CI_Model {

	public function last()
	{
		$result = $this->db->get('lendings')->last_row('array');
		$last_id = intval(substr($result['lending_id'], 1));

		return 'L' . str_repeat(0, 7 - strlen($last_id)) . ++$last_id;
	}

	public function exists($lending_id)
	{
		$this->db->where('lending_id', $lending_id);
		$this->db->limit(1);

		return (bool) $this->db->get('lendings')->num_rows();
	}

	public function all()
	{
		$this->db->join('members', 'members.member_id = lendings.member_id', 'inner');
		$this->db->join('books', 'books.book_id = lendings.book_id', 'inner');

		return $this->db->get('lendings')->result_array();
	}

	public function get($lending_id)
	{
		$this->db->where('lending_id', $lending_id);
		$this->db->limit(1);

		return $this->db->get('lendings')->row_array();
	}

	public function create()
	{
		$lending_data = array(
			'lending_id' => $this->last(),
			'member_id' => $this->input->post('name'),
			'book_id' => $this->input->post('title'),
			'lending_start' => $this->input->post('start'),
			'lending_end' => $this->input->post('end'),
			'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		$this->db->trans_start();
		$this->db->set($lending_data);
		$this->db->insert('lendings');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Data peminjaman gagal ditambahkan'
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
					'text' => 'Data peminjaman berhasil ditambahkan'
				)
			);
		}
	}

	public function update($lending_id)
	{
		$lending_data = array(
			'member_id' => $this->input->post('name'),
			'book_id' => $this->input->post('title'),
			'lending_start' => $this->input->post('start'),
			'lending_end' => $this->input->post('end'),
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		$this->db->trans_start();
		$this->db->set($lending_data);
		$this->db->where('lending_id', $lending_id);
		$this->db->update('lendings');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Data peminjaman gagal diubah'
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
					'text' => 'Data peminjaman berhasil diubah'
				)
			);
		}

		$this->db->reset_query();
	}

	public function delete()
	{
		$this->db->trans_start();
		$this->db->where('lending_id', $this->input->post('lending_id'));
		$this->db->delete('lendings');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Data peminjaman gagal dihapus'
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
					'text' => 'Data peminjaman berhasil dihapus'
				)
			);
		}

		$this->db->reset_query();
	}
}
