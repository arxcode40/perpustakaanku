<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_books extends CI_Migration {

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
	      'title' => array(
	        'constraint' => 64,
	        'type' => 'VARCHAR'
	      ),
	      'publication_year' => array(
	        'type' => 'YEAR'
	      ),
	      'author' => array(
	        'constraint' => 64,
	        'type' => 'VARCHAR'
	      ),
	      'publisher' => array(
	        'constraint' => 64,
	        'type' => 'VARCHAR'
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
    	'books', TRUE, array(
	    	'CHARACTER SET' => 'utf8mb4',
	    	'COLLATE' => 'utf8mb4_unicode_ci',
	    	'ENGINE' => 'InnoDB'
    	)
    );
	}

	public function down() {
		$this->dbforge->drop_table('books', TRUE);
	}
}
