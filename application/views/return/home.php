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
							'icon' => 'box-arrow-in-down',
							'name' => 'Data pengembalian'
						)
					)
				)
			)
		?>

		<!-- Returns datatable -->
		<?php $thead = array('#', 'Kode', 'Nama', 'Judul', 'Tanggal pengembalian', 'Denda', 'Aksi') ?>
		<?php $tbody = array() ?>
		<?php foreach ($returns as $index => $return): ?>
			<?php $tbody[] = array($index + 1, $return['id'], $return['fullname'], $return['title'], nice_date($return['checkout_date'], 'd M Y'), 'Rp' . number_format($return['fine'], 0, ',', '.'), $return['id']) ?>
		<?php endforeach ?>
		<?php
			$this->load->view(
				'templates/datatable',
				array(
					'name' => 'pengembalian',
					'heads' => $thead,
					'rows' => $tbody
				)
			)
		?>
		<?php $tbody = array() ?>
	</div>

	<!-- Report table -->
	<?php $thead = array('#', 'Kode', 'Nama', 'Judul', 'Tanggal pengembalian', 'Denda') ?>
	<?php foreach ($returns as $index => $return): ?>
		<?php $tbody[] = array($index + 1, $return['id'], $return['fullname'], $return['title'], nice_date($return['checkout_date'], 'd M Y'), 'Rp' . number_format($return['fine'], 0, ',', '.')) ?>
	<?php endforeach ?>
	<?php
		$this->load->view(
			'templates/report',
			array(
				'name' => 'pengembalian',
				'heads' => $thead,
				'rows' => $tbody
			)
		)
	?>
</main>