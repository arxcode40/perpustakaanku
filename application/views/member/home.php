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
							'icon' => 'person-standing',
							'name' => 'Data anggota'
						)
					)
				)
			)
		?>

		<!-- Members datatable -->
		<?php $thead = array('#', 'Kode', 'Nama', 'Jenis kelamin', 'Email', 'No. telp', 'Aksi') ?>
		<?php foreach ($members as $index => $member): ?>
			<?php $tbody[] = array($index + 1, $member['id'], $member['fullname'], $member['gender'], $member['email'], $member['phone_number'], $member['id']) ?>
		<?php endforeach ?>
		<?php
			$this->load->view(
				'templates/datatable',
				array(
					'name' => 'anggota',
					'heads' => $thead,
					'rows' => $tbody)
			)
		?>
		<?php unset($tbody) ?>
	</div>

	<!-- Report table -->
	<?php $thead = array('#', 'Kode', 'Nama', 'Jenis kelamin', 'Email', 'No. telp', 'Alamat') ?>
	<?php foreach ($members as $index => $member): ?>
		<?php $tbody[] = array($index + 1, $member['id'], $member['fullname'], $member['gender'], $member['email'], $member['phone_number'], $member['address']) ?>
	<?php endforeach ?>
	<?php
		$this->load->view(
			'templates/report',
			array(
				'name' => 'anggota',
				'heads' => $thead,
				'rows' => $tbody
			)
		)
	?>
</main>