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
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="/buku/">
						<i class="bi bi-book-half"></i>
						Data buku
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-plus-lg"></i>
					Tambah data buku
				</li>
			</ol>
		</nav>

		<!-- Book create form -->
		<?= form_open(uri_string(), array('class' => 'card shadow', 'data-aos' => 'fade', 'data-aos-delay' => 100)) ?>
			<!-- Card Header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-plus-lg"></i>
					Tambah data buku
				</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/buku/">
					<i class="bi bi-arrow-left"></i>
					<span class="d-none d-sm-inline">Kembali</span>
				</a>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="id">
						Kode buku<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($last_id) ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="title">
						Judul buku<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input autofocus="autofocus" class="form-control <?= form_error('title') === '' ?: 'is-invalid' ?>" id="title" name="title" placeholder="Masukkan judul buku" type="text" value="<?= html_escape(set_value('title')) ?>" />
						<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="publicationYear">
						Tahun terbit<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('publication_year') === '' ?: 'is-invalid' ?>" id="publicationYear" name="publication_year" placeholder="Masukkan tahun terbit buku" type="number" value="<?= html_escape(set_value('publication_year', mdate('%Y'))) ?>" />
						<?= form_error('publication_year', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="author">
						Pengarang buku
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('author') === '' ?: 'is-invalid' ?>" id="author" name="author" placeholder="Masukkan pengarang buku" type="text" value="<?= html_escape(set_value('author')) ?>" />
						<?= form_error('author', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="publisher">
						Penerbit buku
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('publisher') === '' ?: 'is-invalid' ?>" id="publisher" name="publisher" placeholder="Masukkan penerbit buku" type="text" value="<?= html_escape(set_value('publisher')) ?>" />
						<?= form_error('publisher', '<div class="invalid-feedback">', '</div>') ?>
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