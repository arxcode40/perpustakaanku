<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

	public function __construct()
	{
		$this->load->database();
		$this->load->dbforge();
	}

	public function up() {
		$this->dbforge->add_field(
			array(
	      'id' => array(
	        'constraint' => 16,
	        'type' => 'VARCHAR'
	      ),
	      'username' => array(
	        'constraint' => 16,
	        'type' => 'VARCHAR'
	      ),
	      'password' => array(
	        'constraint' => 64,
	        'type' => 'VARCHAR'
	      ),
	      'privilege' => array(
	        'constraint' => array('Administrator'),
	        'type' => 'ENUM'
	      )
    	)
    );
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table(
    	'test', TRUE, array(
	    	'CHARACTER SET' => 'utf8mb4',
	    	'COLLATE' => 'utf8mb4_unicode_ci',
	    	'ENGINE' => 'InnoDB'
    	)
    );
	}

	public function down() {
		$this->dbforge->drop_table('users', TRUE);
	}
}
