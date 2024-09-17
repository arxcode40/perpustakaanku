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
					<a class="link-underline link-underline-opacity-0" href="/peminjaman/">
						<i class="bi bi-box-arrow-up"></i>
						Data peminjaman
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-pencil-square"></i>
					Ubah data peminjaman
				</li>
			</ol>
		</nav>

		<!-- Lending update form -->
		<?= form_open(uri_string(), array('class' => 'card shadow', 'data-aos' => 'fade', 'data-aos-delay' => 100)) ?>
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-pencil-square"></i>
					Ubah data peminjaman
				</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/peminjaman/">
					<i class="bi bi-arrow-left"></i>
					<span class="d-none d-sm-inline">Kembali</span>
				</a>
			</div>

			<!-- Card body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="id">
						Kode peminjaman<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($lending['id'])?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="fullname">
						Nama anggota<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<select autofocus="autofocus" class="form-select <?= form_error('fullname') === '' ?: 'is-invalid' ?>" id="fullname" name="fullname">
							<option value="">Pilih nama anggota</option>
							<?php foreach ($members as $member): ?>
								<option <?= set_select('fullname', html_escape($member['id']), html_escape($lending['member_id']) === html_escape($member['id'])) ?> value="<?= html_escape($member['id']) ?>"><?= html_escape($member['fullname']) ?></option>
							<?php endforeach ?>
						</select>
						<?= form_error('fullname', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="title">
						Judul buku<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<select class="form-select <?= form_error('title') === '' ?: 'is-invalid' ?>" id="title" name="title">
							<option value="">Pilih judul buku</option>
							<?php foreach ($books as $book): ?>
								<option <?= set_select('title', html_escape($book['id']), html_escape($lending['book_id']) === html_escape($book['id'])) ?> value="<?= html_escape($book['id']) ?>"><?= html_escape($book['title']) ?></option>
							<?php endforeach ?>
						</select>
						<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="lendingDate">
						Tanggal pinjam<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('lending_date') === '' ?: 'is-invalid' ?>" id="lendingDate" name="lending_date" oninput="$('#returnDate').attr('min', $(this).val());" type="date" value="<?= html_escape(set_value('lending_date', $lending['lending_date'])) ?>" />
						<?= form_error('lending_date', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="returnDate">
						Tanggal kembali<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('return_date') === '' ?: 'is-invalid' ?>" id="returnDate" min="<?= html_escape($lending['lending_date']) ?>" name="return_date" type="date" value="<?= html_escape(set_value('return_date', $lending['return_date'])) ?>" />
						<?= form_error('return_date', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>

			<!-- Card footer -->
			<div class="card-footer">
				<button class="btn btn-primary shadow" type="submit">
					<i class="bi bi-pencil-square"></i>
					Ubah
				</button>
				<button class="btn btn-secondary shadow" type="reset">
					<i class="bi bi-x-lg"></i>
					Reset
				</button>
			</div>
		<?= form_close() ?>
	</div>
</main>