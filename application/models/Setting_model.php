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
}
