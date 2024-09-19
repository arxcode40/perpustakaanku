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
							'icon' => 'speedometer',
							'name' => 'Dasbor'
						)
					)
				)
			)
		?>

		<!-- Dashboard panel -->
		<div class="g-3 row">
			<!-- Card panel -->
			<?php
				$this->load->view(
					'templates/panel',
					array(
						'delay' => 50,
						'name' => 'anggota',
						'count' => $total_members
					)
				)
			?>
			<!-- Card panel -->
			<?php
				$this->load->view(
					'templates/panel',
					array(
						'delay' => 100,
						'name' => 'buku',
						'count' => $total_books
					)
				)
			?>
			<!-- Card panel -->
			<?php
				$this->load->view(
					'templates/panel',
					array(
						'delay' => 150,
						'name' => 'peminjaman',
						'count' => $total_lendings
					)
				)
			?>
			<!-- Card panel -->
			<?php
				$this->load->view(
					'templates/panel',
					array(
						'delay' => 200,
						'name' => 'pengembalian',
						'count' => $total_returns
					)
				)
			?>
		</div>
	</div>
</main>