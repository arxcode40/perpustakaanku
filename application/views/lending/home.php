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
							'icon' => 'box-arrow-up',
							'name' => 'Data peminjaman'
						)
					)
				)
			)
		?>

		<!-- Lendings datatable -->
		<?php $thead = array('#', 'Kode', 'Nama', 'Judul', 'Tanggal pinjam', 'Tanggal kembali', 'Aksi') ?>
		<?php $tbody = array() ?>
		<?php foreach ($lendings as $index => $lending): ?>
			<?php $tbody[] = array($index + 1, $lending['id'], $lending['fullname'], $lending['title'], nice_date($lending['lending_date'], 'd M Y'), nice_date($lending['return_date'], 'd M Y'), $lending['id']) ?>
		<?php endforeach ?>
		<?php
			$this->load->view(
				'templates/datatable',
				array(
					'name' => 'peminjaman',
					'heads' => $thead,
					'rows' => $tbody
				)
			)
		?>
		<?php $tbody = array() ?>
	</div>

	<!-- Report table -->
	<?php $thead = array('#', 'Kode', 'Nama', 'Judul', 'Tanggal pinjam', 'Tanggal kembali') ?>
	<?php foreach ($lendings as $index => $lending): ?>
		<?php $tbody[] = array($index + 1, $lending['id'], $lending['fullname'], $lending['title'], nice_date($lending['lending_date'], 'd M Y'), nice_date($lending['return_date'], 'd M Y')) ?>
	<?php endforeach ?>
	<?php
		$this->load->view(
			'templates/report',
			array(
				'name' => 'peminjaman',
				'heads' => $thead,
				'rows' => $tbody
			)
		)
	?>
</main>