<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_settings extends CI_Migration {

	public function __construct()
	{
		$this->load->database();
		$this->load->dbforge();
	}

	public function up() {
		$this->dbforge->add_field(
			array(
	      'setting_name' => array(
	        'constraint' => 64,
	        'type' => 'VARCHAR'
	      ),
	      'setting_value' => array(
	        'constraint' => 64,
	        'type' => 'VARCHAR'
	      )
    	)
    );
    $this->dbforge->add_key('setting_name', TRUE);
    $this->dbforge->create_table(
    	'settings', TRUE, array(
	    	'CHARACTER SET' => 'utf8mb4',
	    	'COLLATE' => 'utf8mb4_unicode_ci',
	    	'ENGINE' => 'InnoDB'
    	)
    );
	}

	public function down() {
		$this->dbforge->drop_table('settings', TRUE);
	}
}
