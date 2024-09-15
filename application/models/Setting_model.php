<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

	public function get() {
		$rows = $this->db->get('settings')->result_array();

		foreach ($rows as $row)
		{
			$data[$row['setting_name']] = $row['setting_value'];
		}

		return $data;
	}

	public function set()
	{
		$setting_data = array(
			array(
				'setting_name' => 'application_name',
				'setting_value' => $this->input->post('application_name')
			),
			array(
				'setting_name' => 'application_theme',
				'setting_value' => $this->input->post('application_theme')
			),
			array(
				'setting_name' => 'library_fines',
				'setting_value' => (int) preg_replace('/[\.]+/', '', $this->input->post('library_fines'))
			),
		);

		$this->db->trans_start();
		$this->db->update_batch('settings', $setting_data, 'setting_name');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata(
				'alert',
				array(
					'icon' => 'x',
					'status' => 'danger',
					'text' => 'Pengaturan gagal disimpan'
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
					'text' => 'Pengaturan berhasil disimpan'
				)
			);
		}

		$this->db->reset_query();
	}
}
