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
							'url' => base_url('pengembalian'),
							'icon' => 'box-arrow-in-down',
							'name' => 'Data pengembalian'
						),
						array(
							'icon' => 'plus-lg',
							'name' => 'Tambah data pengembalian'
						)
					)
				)
			)
		?>

		<!-- Return create form -->
		<?php
			$this->load->view(
				'templates/form/return',
				array(
					'operation' => 'Tambah',
				)
			)
		?>
	</div>
</main>

<script>const returns = JSON.parse(`<?= json_encode($lendings) ?>`);</script>