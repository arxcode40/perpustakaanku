<?php
	$this->load->view(
		'templates/form_open',
		array(
			'icon' => $operation === 'Tambah' ? 'plus-lg' : 'pencil-square',
			'name' => 'pengembalian'
		)
	)
?>
	<div class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'id',
					'name' => 'Kode transaksi',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<?php if ($operation === 'Tambah'): ?>
				<select autofocus="autofocus" class="form-select <?= form_error('id') === '' ?: 'is-invalid' ?>" id="id" name="id" onchange="returnDetail();">
					<option value="">Pilh transaksi peminjaman</option>
					<?php foreach ($lendings as $lending): ?>
						<?php if ($lending['checkout_date'] === NULL): ?>
						<option <?= set_select('title', html_escape($lending['id'])) ?> value="<?= html_escape($lending['id']) ?>"><?= html_escape($lending['id']) ?></option>
						<?php endif ?>
					<?php endforeach ?>
				</select>
			<?php else: ?>
				<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($return['id']) ?>" />
			<?php endif ?>
			<?= form_error('id', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<div class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'fullname',
					'name' => 'Nama anggota',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control" disabled="disabled" id="fullname" type="text" value="<?= html_escape($return['fullname'] ?? '') ?>" />
		</div>
	</div>
	<div class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'title',
					'name' => 'Judul buku',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control" disabled="disabled" id="title" type="text" value="<?= html_escape($return['title'] ?? '') ?>" />
		</div>
	</div>
	<div class="row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'checkoutDate',
					'name' => 'Tanggal pengembalian',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control <?= form_error('checkout_date') === '' ?: 'is-invalid' ?>" id="checkoutDate" min="<?= html_escape($return['lending_date'] ?? '') ?>" name="checkout_date" type="date" value="<?= html_escape(set_value('checkout_date', $return['checkout_date'] ?? mdate('%Y-%m-%d'))) ?>" />
			<?= form_error('checkout_date', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
<?php $this->load->view('templates/form_close') ?>