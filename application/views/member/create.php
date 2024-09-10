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
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="/anggota/">
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
		<?= form_open(uri_string(), array('class' => 'card shadow')) ?>
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-plus-lg"></i>
					Tambah data anggota
				</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/anggota/">
					<i class="bi bi-arrow-left"></i>
					<span class="d-none d-sm-inline">Kembali</span>
				</a>
			</div>

			<!-- Card body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="memberCode">
						Kode anggota
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control" disabled="disabled" id="memberCode" type="text" value="<?= html_escape($last_id) ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="memberName">
						Nama anggota
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input autofocus="autofocus" class="form-control <?= form_error('name') === '' ?: 'is-invalid' ?>" id="memberName" name="name" placeholder="Masukkan nama anggota" type="text" value="<?= html_escape(set_value('name')) ?>" />
						<?= form_error('name', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<fieldset class="mb-3 row">
					<legend class="col-md-3 col-lg-2 col-form-label d-md-flex pt-0">
						Jenis kelamin
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</legend>
					<div class="col-md-9 col-lg-10">
						<div class="form-check form-check-inline">
							<input class="form-check-input" <?= set_radio('gender', 'Laki-laki', TRUE) ?> id="memberGenderMale" name="gender" type="radio" value="Laki-laki" />
							<label class="form-check-label" for="memberGenderMale">Laki-laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" <?= set_radio('gender', 'Perempuan') ?> id="memberGenderFemale" name="gender" type="radio" value="Perempuan" />
							<label class="form-check-label" for="memberGenderFemale">Perempuan</label>
						</div>
						<?= form_error('gender', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</fieldset>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="memberEmail">
						Email anggota
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('email') === '' ?: 'is-invalid' ?>" id="memberEmail" name="email" placeholder="Masukkan email anggota" type="email" value="<?= html_escape(set_value('email')) ?>" />
						<?= form_error('email', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="memberPhone">
						Nomor telepon
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('phone') === '' ?: 'is-invalid' ?>" id="memberPhone" name="phone" placeholder="Masukkan nomor telepon" type="tel" value="<?= html_escape(set_value('phone')) ?>" />
						<?= form_error('phone', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="memberAddress">
						Alamat anggota
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<textarea class="form-control <?= form_error('address') === '' ?: 'is-invalid' ?>" id="memberAddress" name="address" placeholder="Masukkan alamat anggota"><?= html_escape(set_value('address')) ?></textarea>
						<?= form_error('phone', '<div class="invalid-feedback">', '</div>') ?>
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