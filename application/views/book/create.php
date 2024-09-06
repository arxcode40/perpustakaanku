<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form Alert -->
		<?php $this->load->view('templates/alert', array('alert' => $this->session->flashdata('alert'))) ?>
		
		<!-- Breadcrumb -->
		<nav class="mb-3">
			<ol class="bg-body-tertiary breadcrumb p-3 rounded shadow">
				<li class="breadcrumb-item">
					<a href="/">Beranda</a>
				</li>
				<li class="breadcrumb-item">
					<a href="/buku/">Data buku</a>
				</li>
				<li class="active breadcrumb-item">Tambah data buku</li>
			</ol>
		</nav>

		<!-- Member DataTable -->
		<div class="card shadow">
			<!-- Card Header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">Tambah data buku</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/buku/">Kembali</a>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="bookCode">
						Kode buku
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control" disabled="disabled" id="bookCode" type="text" value="<?= 'B0001' ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="bookTitle">
						Judul buku
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input autofocus="autofocus" class="form-control <?= form_error('title') === '' ?: 'is-invalid' ?>" id="bookTitle" name="title" placeholder="Masukkan judul buku" type="text" value="<?= set_value('title') ?>" />
						<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="bookPublicationYear">
						Tahun terbit
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('publication_year') === '' ?: 'is-invalid' ?>" id="bookPublicationYear" name="publication_year" placeholder="Masukkan tahun terbit buku" type="number" value="<?= set_value('publication_year', mdate('%Y')) ?>" />
						<?= form_error('publication_year', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="bookAuthor">
						Pengarang buku
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('author') === '' ?: 'is-invalid' ?>" id="bookAuthor" name="author" placeholder="Masukkan pengarang buku" type="text" value="<?= set_value('author') ?>" />
						<?= form_error('author', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="bookPublisher">
						Penerbit buku
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('publisher') === '' ?: 'is-invalid' ?>" id="bookPublisher" name="publisher" placeholder="Masukkan penerbit buku" type="text" value="<?= set_value('publisher') ?>" />
						<?= form_error('publisher', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>

			<!-- Card Footer -->
			<div class="card-footer">
				<button class="btn btn-primary shadow" type="submit">Tambah</button>
				<button class="btn btn-secondary shadow" type="reset">Reset</button>
			</div>
		</div>
	</div>
</main>