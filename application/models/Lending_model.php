<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lending_model extends CI_Model {

	public function last()
	{
		// Parse lending ID
		$result = $this->db->get('transactions')->last_row('array');
		$last_id = intval(substr($result['id'] ?? 'T0000000', 1));

		return 'T' . str_repeat(0, 7 - strlen($last_id)) . ++$last_id;
	}

	public function exists($id)
	{
		$this->db->where('id', $id);
		$this->db->limit(1);

		return (bool) $this->db->get('transactions')->num_rows();
	}

	public function all()
	{
		$this->db->select('*, transactions.id AS id');
		$this->db->join('members', 'members.id = transactions.member_id', 'inner');
		$this->db->join('books', 'books.id = transactions.book_id', 'inner');

		return $this->db->get('transactions')->result_array();
	}

	public function get($id)
	{
		$this->db->where('id', $id);
		$this->db->limit(1);

		return $this->db->get('transactions')->row_array();
	}

	public function create()
	{
		// Lending data
		$lending_data = array(
			'id' => $this->last(),
			'member_id' => $this->input->post('fullname'),
			'book_id' => $this->input->post('title'),
			'lending_date' => $this->input->post('lending_date'),
			'return_date' => $this->input->post('return_date'),
			'created_at' => mdate('%Y-%m-%d %H:%i:%s'),
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		// Create lending data
		$this->db->trans_start();
		$this->db->set($lending_data);
		$this->db->insert('transactions');
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

	public function update($id)
	{
		// Lending data
		$lending_data = array(
			'member_id' => $this->input->post('fullname'),
			'book_id' => $this->input->post('title'),
			'lending_date' => $this->input->post('lending_date'),
			'return_date' => $this->input->post('return_date'),
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		// Update lending data
		$this->db->trans_start();
		$this->db->set($lending_data);
		$this->db->where('id', $id);
		$this->db->update('transactions');
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
		// Delete lending data
		$this->db->trans_start();
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('transactions');
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
