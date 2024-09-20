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
							'url' => base_url('pengembalian'),
							'icon' => 'box-arrow-in-down',
							'name' => 'Data pengembalian'
						),
						array(
							'icon' => 'plus-lg',
							'name' => 'Tambah data pengembalian'
						)
					)
				)
			)
		?>

		<!-- Return create form -->
		<?php
			$this->load->view(
				'templates/form_open',
				array(
					'operation' => 'Tambah',
					'name' => 'pengembalian'
				)
			)
		?>
			<div class="mb-3 row">
				<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="id">
					Kode transaksi<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-8 col-lg-9">
					<select autofocus="autofocus" class="form-select <?= form_error('id') === '' ?: 'is-invalid' ?>" id="id" name="id" onchange="returnDetail();">
						<option value="">Pilh transaksi peminjaman</option>
						<?php foreach ($lendings as $lending): ?>
							<?php if ($lending['checkout_date'] === NULL): ?>
							<option <?= set_select('title', html_escape($lending['id'])) ?> value="<?= html_escape($lending['id']) ?>"><?= html_escape($lending['id']) ?> (<?= html_escape($lending['fullname']) ?> - <?= html_escape($lending['title']) ?>)</option>
							<?php endif ?>
						<?php endforeach ?>
					</select>
					<?= form_error('id', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="fullname">
					Nama anggota<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-8 col-lg-9">
					<input class="form-control" disabled="disabled" id="fullname" type="text" />
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="title">
					Judul buku<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-8 col-lg-9">
					<input class="form-control" disabled="disabled" id="title" type="text" />
				</div>
			</div>
			<div class="row">
				<label class="col-md-4 col-lg-3 col-form-label d-md-flex" for="checkoutDate">
					Tanggal pengembalian<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-8 col-lg-9">
					<input class="form-control <?= form_error('checkout_date') === '' ?: 'is-invalid' ?>" id="checkoutDate" name="checkout_date" type="date" value="<?= html_escape(set_value('checkout_date', mdate('%Y-%m-%d'))) ?>" />
					<?= form_error('checkout_date', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
		<?php $this->load->view('templates/form_close') ?>
	</div>
</main>

<script>const returns = JSON.parse(`<?= json_encode($lendings) ?>`);</script>