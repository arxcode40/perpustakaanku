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
				'templates/form_open',
				array(
					'operation' => 'Tambah',
					'name' => 'anggota'
				)
			)
		?>
			<div class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'width' => 'col-md-3 col-lg-2',
							'key' => 'id',
							'name' => 'Kode anggota',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-9 col-lg-10">
					<?php
						$this->load->view(
							'templates/input_disabled',
							array('value' => $last_id)
						)
					?>
				</div>
			</div>
			<div class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'width' => 'col-md-3 col-lg-2',
							'key' => 'fullname',
							'name' => 'Nama anggota',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-9 col-lg-10">
					<?php
						$this->load->view(
							'templates/input_field',
							array(
								'autofocus' => TRUE,
								'name' => 'fullname',
								'key' => 'fullname',
								'placeholder' => 'nama anggota',
								'type' => 'text',
								'value' => ''
							)
						)
					?>
					<?= form_error('fullname', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<fieldset class="mb-3 row">
				<?php
					$this->load->view(
						'templates/legend',
						array(
							'width' => 'col-md-3 col-lg-2',
							'key' => 'gender',
							'name' => 'Jenis kelamin',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-9 col-lg-10">
					<?php
						$this->load->view(
							'templates/input_check',
							array(
								'inline' => TRUE,
								'type' => 'radio',
								'name' => 'gender',
								'value' => 'Laki-laki',
								'default' => TRUE,
								'key' => 'male'
							)
						)
					?>
					<?php
						$this->load->view(
							'templates/input_check',
							array(
								'inline' => TRUE,
								'type' => 'radio',
								'name' => 'gender',
								'value' => 'Perempuan',
								'default' => FALSE,
								'key' => 'female'
							)
						)
					?>
					<?= form_error('gender', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</fieldset>
			<div class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'width' => 'col-md-3 col-lg-2',
							'key' => 'email',
							'name' => 'Email anggota',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-9 col-lg-10">
					<?php
						$this->load->view(
							'templates/input_field',
							array(
								'autofocus' => FALSE,
								'name' => 'email',
								'key' => 'email',
								'placeholder' => 'email anggota',
								'type' => 'email',
								'value' => ''
							)
						)
					?>
					<?= form_error('email', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<div class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'width' => 'col-md-3 col-lg-2',
							'key' => 'phoneNumber',
							'name' => 'Nomor telepon',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-9 col-lg-10">
					<?php
						$this->load->view(
							'templates/input_field',
							array(
								'autofocus' => FALSE,
								'name' => 'phone_number',
								'key' => 'phoneNumber',
								'placeholder' => 'nomor telepon',
								'type' => 'tel',
								'value' => ''
							)
						)
					?>
					<?= form_error('phone_number', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<div class="row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'width' => 'col-md-3 col-lg-2',
							'key' => 'address',
							'name' => 'Alamat anggota',
							'required' => FALSE
						)
					)
				?>
				<div class="col-md-9 col-lg-10">
					<?php
						$this->load->view(
							'templates/textarea',
							array(
								'name' => 'address',
								'key' => 'address',
								'placeholder' => 'alamat anggota',
								'value' => ''
							)
						)
					?>
					<?= form_error('address', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
		<?php $this->load->view('templates/form_close') ?>
	</div>
</main>