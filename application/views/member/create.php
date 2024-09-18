<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form alert -->
		<?php $this->load->view('templates/alert', array('alert' => $this->session->flashdata('alert'))) ?>
		
		<!-- Breadcrumb -->
		<nav class="mb-3">
			<ol class="bg-body-tertiary breadcrumb p-3 rounded shadow" data-aos="fade-right">
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="<?= base_url() ?>">
						<i class="bi bi-house-door-fill"></i>
						Beranda
					</a>
				</li>
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="<?= base_url('anggota') ?>">
						<i class="bi bi-person-standing"></i>
						Data anggota
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-plus-lg"></i>
					Tambah data anggota
				</li>
			</ol>
		</nav>

		<!-- Member create form -->
		<?= form_open(uri_string(), array('class' => 'card shadow', 'data-aos' => 'fade', 'data-aos-delay' => 100)) ?>
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-plus-lg"></i>
					Tambah data anggota
				</h5>
				<a class="btn btn-secondary btn-sm shadow" href="<?= base_url('anggota') ?>">
					<i class="bi bi-arrow-left"></i>
					<span class="d-none d-sm-inline">Kembali</span>
				</a>
			</div>

			<!-- Card body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="id">
						Kode anggota<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($last_id) ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="fullname">
						Nama anggota<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input autofocus="autofocus" class="form-control <?= form_error('fullname') === '' ?: 'is-invalid' ?>" id="fullname" name="fullname" placeholder="Masukkan nama anggota" type="text" value="<?= html_escape(set_value('fullname')) ?>" />
						<?= form_error('fullname', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<fieldset class="mb-3 row">
					<legend class="col-md-3 col-lg-2 col-form-label d-md-flex pt-0">
						Jenis kelamin<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</legend>
					<div class="col-md-9 col-lg-10">
						<div class="form-check form-check-inline">
							<input class="form-check-input" <?= set_radio('gender', 'Laki-laki', TRUE) ?> id="male" name="gender" type="radio" value="Laki-laki" />
							<label class="form-check-label" for="male">Laki-laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" <?= set_radio('gender', 'Perempuan') ?> id="female" name="gender" type="radio" value="Perempuan" />
							<label class="form-check-label" for="female">Perempuan</label>
						</div>
						<?= form_error('gender', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</fieldset>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="email">
						Email anggota<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('email') === '' ?: 'is-invalid' ?>" id="email" name="email" placeholder="Masukkan email anggota" type="email" value="<?= html_escape(set_value('email')) ?>" />
						<?= form_error('email', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="phoneNumber">
						Nomor telepon<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('phone_number') === '' ?: 'is-invalid' ?>" id="phoneNumber" name="phone_number" placeholder="Masukkan nomor telepon" type="tel" value="<?= html_escape(set_value('phone_number')) ?>" />
						<?= form_error('phone_number', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="address">
						Alamat anggota
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<textarea class="form-control <?= form_error('address') === '' ?: 'is-invalid' ?>" id="address" name="address" placeholder="Masukkan alamat anggota"><?= html_escape(set_value('address')) ?></textarea>
						<?= form_error('address', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>

			<!-- Card footer -->
			<div class="card-footer">
				<button class="btn btn-primary shadow" type="submit">
					<i class="bi bi-plus-lg"></i>
					Tambah
				</button>
				<button class="btn btn-secondary shadow" type="reset">
					<i class="bi bi-x-lg"></i>
					Reset
				</button>
			</div>
		<?= form_close() ?>
	</div>
</main>