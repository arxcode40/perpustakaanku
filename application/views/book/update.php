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
							'url' => base_url('buku'),
							'icon' => 'book-half',
							'name' => 'Data buku'
						),
						array(
							'icon' => 'pencil-square',
							'name' => 'Ubah data buku'
						)
					)
				)
			)
		?>

		<!-- Book update form -->
		<?php
			$this->load->view(
				'templates/form_open',
				array(
					'operation' => 'Ubah',
					'name' => 'buku'
				)
			)
		?>
			<div class="mb-3 row">
				<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="id">
					Kode buku<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-9 col-lg-10">
					<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($book['id']) ?>" />
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="title">
					Judul buku<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-9 col-lg-10">
					<input autofocus="autofocus" class="form-control <?= form_error('title') === '' ?: 'is-invalid' ?>" id="title" name="title" placeholder="Masukkan judul buku" type="text" value="<?= html_escape(set_value('title', $book['title'])) ?>" />
					<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="publication_year">
					Tahun terbit<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-9 col-lg-10">
					<input class="form-control <?= form_error('publication_year') === '' ?: 'is-invalid' ?>" id="publication_year" name="publication_year" placeholder="Masukkan tahun terbit buku" type="number" value="<?= html_escape(set_value('publication_year', $book['publication_year'])) ?>" />
					<?= form_error('publication_year', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="author">
					Pengarang buku
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-9 col-lg-10">
					<input class="form-control <?= form_error('author') === '' ?: 'is-invalid' ?>" id="author" name="author" placeholder="Masukkan pengarang buku" type="text" value="<?= html_escape(set_value('author', $book['author'])) ?>" />
					<?= form_error('author', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<div class="row">
				<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="publisher">
					Penerbit buku
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-9 col-lg-10">
					<input class="form-control <?= form_error('publisher') === '' ?: 'is-invalid' ?>" id="publisher" name="publisher" placeholder="Masukkan penerbit buku" type="text" value="<?= html_escape(set_value('publisher', $book['publisher'])) ?>" />
					<?= form_error('publisher', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
		<?php $this->load->view('templates/form_close') ?>
	</div>
</main>