<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form alert -->
		<?php $this->load->view('templates/alert', array('alert' => $this->session->flashdata('alert'))) ?>

		<!-- Breadcrumb -->
		<nav class="mb-3">
			<ol class="bg-body-tertiary breadcrumb p-3 rounded shadow" data-aos="fade-right">
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="/">
						<i class="bi bi-house-door-fill"></i>
						Beranda
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-gear-fill"></i>
					Pengaturan
				</li>
			</ol>
		</nav>

		<!-- My profil form -->
		<?= form_open(uri_string(), array('class' => 'card shadow', 'data-aos' => 'fade', 'data-aos-delay' => 100)) ?>
			<!-- Card header -->
			<h5 class="card-header">
				<i class="bi bi-gear-fill"></i>
				Pengaturan
			</h5>

			<!-- Card body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="applicationName">
						Nama aplikasi<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-8 col-lg-9">
						<input autocapitalize="off" autofocus="autofocus" class="form-control <?= form_error('application_name') === '' ?: 'is-invalid' ?>" id="applicationName" name="application_name" placeholder="Masukkan nama pengguna" type="text" value="<?= html_escape(set_value('application_name', $settings['application_name'])) ?>" />
						<?= form_error('application_name', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<fieldset class="mb-3 row">
					<legend class="col-md-4 col-lg-3 col-form-label d-md-flex pt-0">
						Tema aplikasi<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</legend>
					<div class="col-md-8 col-lg-9">
						<div class="form-check">
							<input class="form-check-input" <?= set_radio('application_theme', 'light', $settings['application_theme'] === 'light') ?> id="lightTheme" name="application_theme" type="radio" value="light" />
							<label class="form-check-label" for="lightTheme">Tema terang</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" <?= set_radio('application_theme', 'dark', $settings['application_theme'] === 'dark') ?> id="darkTheme" name="application_theme" type="radio" value="dark" />
							<label class="form-check-label" for="darkTheme">Tema gelap</label>
						</div>
						<?= form_error('application_theme', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</fieldset>
				<div class="row">
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="libraryFines">
						Denda perpustakaan<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-8 col-lg-9">
						<div class="has-validation input-group">
							<span class="input-group-text">Rp</span>
							<input autocapitalize="off" class="form-control <?= form_error('library_fines') === '' ?: 'is-invalid' ?>" id="libraryFines" inputmode="numeric" name="library_fines" oninput="currencyFormat();" placeholder="Masukkan denda perpustakaan" type="text" value="<?= html_escape(set_value('library_fines', number_format($settings['library_fines'], 0, ',', '.'))) ?>" />
							<?= form_error('library_fines', '<div class="invalid-feedback">', '</div>') ?>
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