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
							'icon' => 'pencil-square',
							'name' => 'Ubah data anggota'
						)
					)
				)
			)
		?>

		<!-- Member update form -->
		<?=
			form_open(
				uri_string(),
				array(
					'class' => 'card shadow',
					'data-aos' => 'fade-up',
					'data-aos-delay' => 100
				)
			)
		?>
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-pencil-square"></i>
					Ubah data anggota
				</h5>
				<a class="btn btn-secondary btn-sm shadow" href="<?= base_url('anggota') ?>">
					<i class="bi bi-arrow-left"></i>
					<span class="d-none d-sm-inline">Kembali</span>
				</a>
			</div>

			<!-- Card body -->
			<div class="card-body">
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
								array('value' => $member['id'])
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
									'value' => $member['fullname']
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
									'default' => $member['gender'] === 'Laki-laki',
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
									'default' => $member['gender'] === 'Perempuan',
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
									'value' => $member['email']
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
									'value' => $member['phone_number']
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
									'value' => $member['address']
								)
							)
						?>
						<?= form_error('address', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>

			<!-- Card footer -->
			<div class="card-footer">
				<?php
					$this->load->view(
						'templates/form_action',
						array(
							'submit' => array(
								'icon' => 'pencil-square',
								'name' => 'Ubah'
							),
							'reset' => array(
								'icon' => 'x-lg',
								'name' => 'Reset'
							)
						)
					)
				?>
			</div>
		<?= form_close() ?>
	</div>
</main>