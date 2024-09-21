<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form alert -->
		<?php
			$this->load->view(
				'templates/alert',
				array('alert' => $this->session->flashdata('alert'))
			)
		?>
		
		<!-- Breadcrumb -->
		<?php
			$this->load->view(
				'templates/breadcrumb',
				array(
					'items' => array(
						array(
							'url' => base_url(),
							'icon' => 'house-door-fill',
							'name' => 'Beranda'
						),
						array(
							'url' => base_url('anggota'),
							'icon' => 'person-standing',
							'name' => 'Data anggota'
						),
						array(
							'icon' => 'plus-lg',
							'name' => 'Tambah data anggota'
						)
					)
				)
			)
		?>

		<!-- Member create form -->
		<?php
			$this->load->view(
				'templates/form/member',
				array('operation' => 'Tambah')
			)
		?>
	</div>
</main>