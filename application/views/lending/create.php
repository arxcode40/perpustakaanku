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
					<a class="link-underline link-underline-opacity-0" href="/peminjaman/">
						<i class="bi bi-box-arrow-up"></i>
						Data peminjaman
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-plus-lg"></i>
					Tambah data peminjaman
				</li>
			</ol>
		</nav>

		<!-- Lending create form -->
		<?= form_open(uri_string(), array('class' => 'card shadow')) ?>
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-plus-lg"></i>
					Tambah data peminjaman
				</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/peminjaman/">
					<i class="bi bi-arrow-left"></i>
					<span class="d-none d-sm-inline">Kembali</span>
				</a>
			</div>

			<!-- Card body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="lendingCode">
						Kode peminjaman<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control" disabled="disabled" id="lendingCode" type="text" value="<?= html_escape($last_id) ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="memberName">
						Nama anggota<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<select autofocus="autofocus" class="form-select <?= form_error('name') === '' ?: 'is-invalid' ?>" id="memberName" name="name">
							<option value="">Pilh nama anggota</option>
							<?php foreach ($members as $member): ?>
								<option <?= set_select('name', html_escape($member['member_id'])) ?> value="<?= html_escape($member['member_id']) ?>"><?= html_escape($member['member_name']) ?></option>
							<?php endforeach ?>
						</select>
						<?= form_error('name', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="bookTitle">
						Judul buku<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<select class="form-select <?= form_error('title') === '' ?: 'is-invalid' ?>" id="bookTitle" name="title">
							<option value="">Pilh judul buku</option>
							<?php foreach ($books as $book): ?>
								<option <?= set_select('title', html_escape($book['book_id'])) ?> value="<?= html_escape($book['book_id']) ?>"><?= html_escape($book['book_title']) ?></option>
							<?php endforeach ?>
						</select>
						<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="lendingStart">
						Tanggal pinjam<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('start') === '' ?: 'is-invalid' ?>" id="lendingStart" name="start" type="date" value="<?= html_escape(set_value('start', mdate('%Y-%m-%d'))) ?>" />
						<?= form_error('start', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="lendingEnd">
						Tanggal kembali<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('end') === '' ?: 'is-invalid' ?>" id="lendingEnd" name="end" type="date" value="<?= html_escape(set_value('end', mdate('%Y-%m-%d'))) ?>" />
						<?= form_error('end', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>

			<!-- Card Footer -->
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