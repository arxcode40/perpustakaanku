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
					<a href="/peminjaman/">Data peminjaman</a>
				</li>
				<li class="active breadcrumb-item">Ubah data peminjaman</li>
			</ol>
		</nav>

		<!-- Member DataTable -->
		<div class="card shadow">
			<!-- Card Header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">Ubah data peminjaman</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/peminjaman/">Kembali</a>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="lendingCode">
						Kode peminjaman
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control" disabled="disabled" id="lendingCode" type="text" value="<?= 'L0001' ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="memberName">
						Nama anggota
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<select autofocus="autofocus" class="form-select <?= form_error('name') === '' ?: 'is-invalid' ?>" id="memberName" name="name">
							<option>Pilh nama anggota</option>
							<option <?= set_select('name', 'M0001') ?> value="M0001">Arya Putra Sadewa</option>
						</select>
						<?= form_error('name', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="bookTitle">
						Judul buku
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<select class="form-select <?= form_error('title') === '' ?: 'is-invalid' ?>" id="bookTitle" name="title">
							<option>Pilh judul buku</option>
							<option <?= set_select('title', 'B0001') ?> value="B0001">Domestic na Kanojo</option>
						</select>
						<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="lendingStart">
						Tanggal pinjam
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('lending_start') === '' ?: 'is-invalid' ?>" id="lendingStart" name="lending_start" type="date" value="<?= set_value('lending_start', mdate('%Y-%m-%d')) ?>" />
						<?= form_error('lending_start', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="lendingEnd">
						Tanggal kembali
						<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9 col-lg-10">
						<input class="form-control <?= form_error('lending_end') === '' ?: 'is-invalid' ?>" id="lendingEnd" name="lending_end" type="date" value="<?= set_value('lending_end', mdate('%Y-%m-%d')) ?>" />
						<?= form_error('lending_end', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>

			<!-- Card Footer -->
			<div class="card-footer">
				<a class="btn btn-success shadow" href="/pengembalian/tambah/0">Selesai</a>
				<button class="btn btn-primary shadow" type="submit">Ubah</button>
				<button class="btn btn-secondary shadow" type="reset">Reset</button>
			</div>
		</div>
	</div>
</main>