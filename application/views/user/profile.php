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
							'name' => 'Profil saya'
						)
					)
				)
			)
		?>

		<!-- User profil form -->
		<?php
			$this->load->view(
				'templates/form_open',
				array(
					'operation' => 'Simpan',
					'icon' => 'person-fill',
					'name' => 'Profil saya'
				)
			)
		?>
			<div class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'tag' => 'label',
							'key' => 'username',
							'name' => 'Nama pengguna',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-8 col-lg-9">
					<input autocapitalize="off" autocomplete="username" autofocus="autofocus" class="form-control <?= form_error('username') === '' ?: 'is-invalid' ?>" id="username" name="username" placeholder="Masukkan nama pengguna" type="text" value="<?= html_escape(set_value('username', $profile['username'])) ?>" />
					<?= form_error('username', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<div class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'tag' => 'label',
							'key' => 'currentPassword',
							'name' => 'Kata sandi saat ini',
							'required' => FALSE
						)
					)
				?>
				<div class="col-md-8 col-lg-9">
					<div class="has-validation input-group">
						<input autocomplete="current-password" class="form-control <?= form_error('current_password') === '' ?: 'is-invalid' ?>" id="currentPassword" name="current_password" placeholder="Masukkan kata sandi saat ini" type="password" />
						<button class="btn btn-secondary" onclick="showPassword();" tabindex="-1" type="button">
							<i class="bi bi-eye-slash pe-none"></i>
						</button>
						<?= form_error('current_password', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'tag' => 'label',
							'key' => 'newPassword',
							'name' => 'Kata sandi baru',
							'required' => FALSE
						)
					)
				?>
				<div class="col-md-8 col-lg-9">
					<div class="has-validation input-group">
						<input autocomplete="new-password" class="form-control <?= form_error('new_password') === '' ?: 'is-invalid' ?>" id="newPassword" name="new_password" placeholder="Masukkan kata sandi baru" type="password" />
						<button class="btn btn-secondary" onclick="showPassword();" tabindex="-1" type="button">
							<i class="bi bi-eye-slash pe-none"></i>
						</button>
						<?= form_error('new_password', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'tag' => 'label',
							'key' => 'confirmPassword',
							'name' => 'Konfirmasi kata sandi baru',
							'required' => FALSE
						)
					)
				?>
				<div class="col-md-8 col-lg-9">
					<div class="has-validation input-group">
						<input autocomplete="new-password" class="form-control <?= form_error('confirm_password') === '' ?: 'is-invalid' ?>" id="confirmPassword" name="confirm_password" placeholder="Masukkan konfirmasi kata sandi baru" type="password" />
						<button class="btn btn-secondary" onclick="showPassword();" tabindex="-1" type="button">
							<i class="bi bi-eye-slash pe-none"></i>
						</button>
						<?= form_error('confirm_password', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>
		<?php $this->load->view('templates/form_close') ?>
	</div>
</main>