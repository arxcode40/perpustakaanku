<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form alert -->
		<?php $this->load->view('templates/alert', array('alert' => $this->session->flashdata('alert'))) ?>

		<!-- Breadcrumb -->
		<nav class="mb-3">
			<ol class="bg-body-tertiary breadcrumb p-3 rounded shadow">
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="/">
						<i class="bi bi-house-door-fill"></i>
						Beranda
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-person-gear"></i>
					Profil saya
				</li>
			</ol>
		</nav>

		<!-- My profil form -->
		<?= form_open(uri_string(), array('class' => 'card shadow')) ?>
			<!-- Card header -->
			<h5 class="card-header">
				<i class="bi bi-person-gear"></i>
				Profil saya
			</h5>

			<!-- Card body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="username">
						Nama pengguna<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-8 col-lg-9">
						<input autocapitalize="off" autocomplete="username" autofocus="autofocus" class="form-control <?= form_error('username') === '' ?: 'is-invalid' ?>" id="username" name="username" placeholder="Masukkan nama pengguna" type="text" value="<?= html_escape(set_value('username', $profile['username'])) ?>" />
						<?= form_error('username', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="currentPassword">
						Kata sandi saat ini
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
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
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="newPassword">
						Kata sandi baru
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
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
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="confirmPassword">
						Konfirmasi kata sandi baru
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
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
			</div>

			<!-- Card footer -->
			<div class="card-footer">
				<button class="btn btn-primary shadow" type="submit">
					<i class="bi bi-floppy-fill"></i>
					Simpan
				</button>
				<button class="btn btn-secondary shadow" type="reset">
					<i class="bi bi-x-lg"></i>
					Reset
				</button>
			</div>
		<?= form_close() ?>
	</div>
</main>