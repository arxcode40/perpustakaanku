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
					<a class="link-underline link-underline-opacity-0" href="/pengembalian/">
						<i class="bi bi-box-arrow-in-down"></i>
						Data pengembalian
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-pencil-square"></i>
					Ubah data pengembalian
				</li>
			</ol>
		</nav>

		<!-- Return update form -->
		<?= form_open(uri_string(), array('class' => 'card shadow')) ?>
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-pencil-square"></i>
					Ubah data pengembalian
				</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/pengembalian/">
					<i class="bi bi-arrow-left"></i>
					<span class="d-none d-sm-inline">Kembali</span>
				</a>
			</div>

			<!-- Card body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="id">
						Kode transaksi<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-8 col-lg-9">
						<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($return['id']) ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="fullname">
						Nama anggota<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-8 col-lg-9">
						<input class="form-control" disabled="disabled" id="fullname" type="text" value="<?= html_escape($return['fullname']) ?>" />
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="title">
						Judul buku<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-8 col-lg-9">
						<input class="form-control" disabled="disabled" id="title" type="text" value="<?= html_escape($return['title']) ?>" />
					</div>
				</div>
				<div class="row">
					<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="checkoutDate">
						Tanggal pengembalian<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-8 col-lg-9">
						<input class="form-control <?= form_error('checkout_date') === '' ?: 'is-invalid' ?>" id="checkoutDate" min="<?= html_escape($return['lending_date']) ?>" name="checkout_date" type="date" value="<?= html_escape(set_value('checkout_date', $return['checkout_date'])) ?>" />
						<?= form_error('checkout_date', '<div class="invalid-feedback">', '</div>') ?>
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