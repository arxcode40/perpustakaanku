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
							'url' => base_url('peminjaman'),
							'icon' => 'box-arrow-up',
							'name' => 'Data peminjaman'
						),
						array(
							'icon' => 'plus-lg',
							'name' => 'Tambah data peminjaman'
						)
					)
				)
			)
		?>

		<!-- Lending create form -->
		<?php
			$this->load->view(
				'templates/form_open',
				array(
					'operation' => 'Tambah',
					'name' => 'peminjaman'
				)
			)
		?>
			<div class="mb-3 row">
				<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="id">
					Kode transaksi<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-9 col-lg-10">
					<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($last_id) ?>" />
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
							<option <?= set_select('fullname', html_escape($member['id'])) ?> value="<?= html_escape($member['id']) ?>"><?= html_escape($member['fullname']) ?></option>
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
							<option <?= set_select('title', html_escape($book['id'])) ?> value="<?= html_escape($book['id']) ?>"><?= html_escape($book['title']) ?></option>
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
					<input class="form-control <?= form_error('lending_date') === '' ?: 'is-invalid' ?>" id="lendingDate" name="lending_date" oninput="$('#returnDate').attr('min', $(this).val());" type="date" value="<?= html_escape(set_value('lending_date', mdate('%Y-%m-%d'))) ?>" />
					<?= form_error('lending_date', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<div class="row">
				<label class="col-md-3 col-lg-2 col-form-label d-md-flex" for="returnDate">
					Tanggal kembali<b class="text-danger">*</b>
					<span class="d-none d-md-block fw-medium ms-auto">:</span>
				</label>
				<div class="col-md-9 col-lg-10">
					<input class="form-control <?= form_error('return_date') === '' ?: 'is-invalid' ?>" id="returnDate" min="<?= html_escape(mdate('%Y-%m-%d')) ?>" name="return_date" type="date" value="<?= html_escape(set_value('return_date', mdate('%Y-%m-%d'))) ?>" />
					<?= form_error('return_date', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
		<?php $this->load->view('templates/form_close') ?>
	</div>
</main>