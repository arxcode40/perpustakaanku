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
					<i class="bi bi-plus-lg"></i>
					Tambah data pengembalian
				</li>
			</ol>
		</nav>

		<!-- Return create form -->
		<?= form_open(uri_string(), array('class' => 'card shadow')) ?>
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-plus-lg"></i>
					Tambah data pengembalian
				</h5>
				<a class="btn btn-secondary btn-sm shadow" href="/pengembalian/">
					<i class="bi bi-arrow-left"></i>
					<span class="d-none d-sm-inline">Kembali</span>
				</a>
			</div>

			<!-- Card body -->
			<div class="card-body">
				<div class="mb-3 row">
					<label class="col-md-3 col-form-label d-md-flex" for="lending">
						Kode transaksi<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9">
						<select autofocus="autofocus" class="form-select <?= form_error('lending') === '' ?: 'is-invalid' ?>" id="lending" name="lending">
							<option value="">Pilh transaksi peminjaman</option>
							<?php foreach ($lendings as $lending): ?>
								<?php if ($lending['checkout_date'] === NULL): ?>
								<option <?= set_select('title', html_escape($lending['id'])) ?> value="<?= html_escape($lending['id']) ?>"><?= html_escape($lending['id']) ?> (<?= html_escape($lending['fullname']) ?> - <?= html_escape($lending['title']) ?>)</option>
								<?php endif ?>
							<?php endforeach ?>
						</select>
						<?= form_error('lending', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="row">
					<label class="col-md-3 col-form-label d-md-flex" for="checkoutDate">
						Tanggal pengembalian<b class="text-danger">*</b>
						<span class="d-none d-md-block fw-medium ms-auto">:</span>
					</label>
					<div class="col-md-9">
						<input class="form-control <?= form_error('checkout_date') === '' ?: 'is-invalid' ?>" id="checkoutDate" name="checkout_date" type="date" value="<?= html_escape(set_value('checkout_date', mdate('%Y-%m-%d'))) ?>" />
						<?= form_error('checkout_date', '<div class="invalid-feedback">', '</div>') ?>
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