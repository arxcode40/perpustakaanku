<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_members extends CI_Migration {

	public function __construct()
	{
		$this->load->database();
		$this->load->dbforge();
	}

	public function up() {
		$this->dbforge->add_field(
			array(
	      'id' => array(
	        'constraint' => 8,
	        'type' => 'VARCHAR'
	      ),
	      'fullname' => array(
	        'constraint' => 64,
	        'type' => 'VARCHAR'
	      ),
	      'gender' => array(
	        'constraint' => array('Laki-laki', 'Perempuan'),
	        'type' => 'ENUM'
	      ),
	      'email' => array(
	        'constraint' => 320,
	        'type' => 'VARCHAR'
	      ),
	      'phone_number' => array(
	        'constraint' => 16,
	        'type' => 'VARCHAR'
	      ),
	      'address' => array(
	        'type' => 'TEXT'
	      ),
	      'created_at' => array(
	        'type' => 'TIMESTAMP'
	      ),
	      'updated_at' => array(
	        'type' => 'TIMESTAMP'
	      ),
	      'deleted_at' => array(
	      	'null' => TRUE,
	        'type' => 'TIMESTAMP'
	      )
    	)
    );
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table(
    	'members', TRUE, array(
	    	'CHARACTER SET' => 'utf8mb4',
	    	'COLLATE' => 'utf8mb4_unicode_ci',
	    	'ENGINE' => 'InnoDB'
    	)
    );
	}

	public function down() {
		$this->dbforge->drop_table('members', TRUE);
	}
}
