<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_transactions extends CI_Migration {

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
	      'member_id' => array(
	        'constraint' => 8,
	        'type' => 'VARCHAR'
	      ),
	      'book_id' => array(
	        'constraint' => 8,
	        'type' => 'VARCHAR'
	      ),
	      'lending_date' => array(
	        'type' => 'DATE'
	      ),
	      'return_date' => array(
	        'type' => 'DATE'
	      ),
	      'checkout_date' => array(
	      	'null' => TRUE,
	        'type' => 'DATE'
	      ),
	      'fine' => array(
	      	'default' => 0,
	        'type' => 'INT'
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
    	'transactions', TRUE, array(
	    	'CHARACTER SET' => 'utf8mb4',
	    	'COLLATE' => 'utf8mb4_unicode_ci',
	    	'ENGINE' => 'InnoDB'
    	)
    );
	}

	public function down() {
		$this->dbforge->drop_table('transactions', TRUE);
	}
}
