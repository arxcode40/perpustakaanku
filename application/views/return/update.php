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
					<a href="/pengembalian/">Data pengembalian</a>
				</li>
				<li class="active breadcrumb-item">Ubah data pengembalian</li>
			</ol>
		</nav>

		<!-- Member DataTable -->
		<div class="card shadow">
			<!-- Card Header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">Ubah data pengembalian</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/pengembalian/">Kembali</a>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-form-label d-md-flex" for="returnCode">
						Kode pengembalian
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9">
						<input class="form-control" disabled="disabled" id="returnCode" type="text" value="<?= 'R0001' ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-form-label d-md-flex" for="memberName">
						Nama anggota
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9">
						<select autofocus="autofocus" class="form-select <?= form_error('name') === '' ?: 'is-invalid' ?>" id="memberName" name="name">
							<option>Pilh nama anggota</option>
							<option <?= set_select('name', 'M0001') ?> value="M0001">Arya Putra Sadewa</option>
						</select>
						<?= form_error('name', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-form-label d-md-flex" for="bookTitle">
						Judul buku
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9">
						<select class="form-select <?= form_error('title') === '' ?: 'is-invalid' ?>" id="bookTitle" name="title">
							<option>Pilh judul buku</option>
							<option <?= set_select('title', 'B0001') ?> value="B0001">Domestic na Kanojo</option>
						</select>
						<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-form-label d-md-flex" for="returnDate">
						Tanggal pengembalian
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9">
						<input class="form-control <?= form_error('return_date') === '' ?: 'is-invalid' ?>" id="returnDate" name="return_date" type="date" value="<?= set_value('return_date', mdate('%Y-%m-%d')) ?>" />
						<?= form_error('return_date', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>

			<!-- Card Footer -->
			<div class="card-footer">
				<button class="btn btn-primary shadow" type="submit">Ubah</button>
				<button class="btn btn-secondary shadow" type="reset">Reset</button>
			</div>
		</div>
	</div>
</main>