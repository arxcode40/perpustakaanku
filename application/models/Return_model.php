<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Return_model extends CI_Model {

	public function exists($id)
	{
		$this->db->where('id', $id);
		$this->db->where('checkout_date IS NOT', 'NULL', FALSE);
		$this->db->limit(1);

		return (bool) $this->db->get('transactions')->num_rows();
	}

	public function all()
	{
		$this->db->select('*, transactions.id AS id');
		$this->db->join('members', 'members.id = transactions.member_id', 'inner');
		$this->db->join('books', 'books.id = transactions.book_id', 'inner');
		$this->db->where('checkout_date IS NOT', 'NULL', FALSE);

		return $this->db->get('transactions')->result_array();
	}

	public function get($id)
	{
		$this->db->select('*, transactions.id AS id');
		$this->db->join('members', 'members.id = transactions.member_id', 'inner');
		$this->db->join('books', 'books.id = transactions.book_id', 'inner');
		$this->db->where('checkout_date IS NOT', 'NULL', FALSE);
		$this->db->where('transactions.id', $id);
		$this->db->limit(1);

		return $this->db->get('transactions')->row_array();
	}

	public function create($library_fines)
	{
		$lending = $this->lending_model->get($this->input->post('id'));

		$return_date = date_create($lending['return_date']);
		$checkout_date = date_create($this->input->post('checkout_date'));
		$date_difference = date_diff($return_date, $checkout_date);
		$fine = (int) date_interval_format($date_difference, '%r%a') * $library_fines;

		// Return data
		$return_data = array(
			'checkout_date' => $this->input->post('checkout_date'),
			'fine' => $fine < 0 ? 0 : $fine,
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		// Create return data
		$this->db->trans_start();
		$this->db->set($return_data);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('transactions');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Data pengembalian gagal ditambahkan'
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
					'text' => 'Data pengembalian berhasil ditambahkan'
				)
			);
		}

		$this->db->reset_query();
	}

	public function update($id, $library_fines)
	{
		$lending = $this->lending_model->get($id);

		$return_date = date_create($lending['return_date']);
		$checkout_date = date_create($this->input->post('checkout_date'));
		$date_difference = date_diff($return_date, $checkout_date);
		$fine = (int) date_interval_format($date_difference, '%r%a') * $library_fines;

		// Return data
		$return_data = array(
			'checkout_date' => $this->input->post('checkout_date'),
			'fine' => $fine < 0 ? 0 : $fine,
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		// Update return data
		$this->db->trans_start();
		$this->db->set($return_data);
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
					'text' => 'Data pengembalian gagal diubah'
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
					'text' => 'Data pengembalian berhasil diubah'
				)
			);
		}

		$this->db->reset_query();
	}

	public function delete()
	{
		// Return data
		$return_data = array(
			'checkout_date' => NULL,
			'fine' => 0,
			'updated_at' => mdate('%Y-%m-%d %H:%i:%s'),
		);

		// Delete return data
		$this->db->trans_start();
		$this->db->set($return_data);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('transactions');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Data pengembalian gagal dihapus'
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
					'text' => 'Data pengembalian berhasil dihapus'
				)
			);
		}

		$this->db->reset_query();
	}
}
