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
							'icon' => 'pencil-square',
							'name' => 'Ubah data pengembalian'
						)
					)
				)
			)
		?>

		<!-- Return update form -->
		<?php
			$this->load->view(
				'templates/form_open',
				array(
					'operation' => 'Ubah',
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
		<?php $this->load->view('templates/form_close') ?>
	</div>
</main>