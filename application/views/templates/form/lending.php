<?php
	$this->load->view(
		'templates/form_open',
		array(
			'icon' => $operation === 'Tambah' ? 'plus-lg' : 'pencil-square',
			'name' => 'peminjaman'
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
			<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($lending['id'] ?? $last_id) ?>" />
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
			<select autofocus="autofocus" class="form-select <?= form_error('fullname') === '' ?: 'is-invalid' ?>" id="fullname" name="fullname">
				<option value="">Pilih nama anggota</option>
				<?php foreach ($members as $member): ?>
					<option <?= set_select('fullname', html_escape($member['id']), isset($lending['member_id']) === FALSE ? FALSE : html_escape($lending['member_id']) === html_escape($member['id'])) ?> value="<?= html_escape($member['id']) ?>"><?= html_escape($member['fullname']) ?></option>
				<?php endforeach ?>
			</select>
			<?= form_error('fullname', '<div class="invalid-feedback">', '</div>') ?>
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
			<select class="form-select <?= form_error('title') === '' ?: 'is-invalid' ?>" id="title" name="title">
				<option value="">Pilih judul buku</option>
				<?php foreach ($books as $book): ?>
					<option <?= set_select('title', html_escape($book['id']), isset($lending['member_id']) === FALSE ? FALSE : html_escape($lending['book_id']) === html_escape($book['id'])) ?> value="<?= html_escape($book['id']) ?>"><?= html_escape($book['title']) ?></option>
				<?php endforeach ?>
			</select>
			<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<div class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'lendingDate',
					'name' => 'Tanggal pinjam',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control <?= form_error('lending_date') === '' ?: 'is-invalid' ?>" id="lendingDate" name="lending_date" oninput="$('#returnDate').attr('min', $(this).val());" type="date" value="<?= html_escape(set_value('lending_date', $lending['lending_date'] ?? mdate('%Y-%m-%d'))) ?>" />
			<?= form_error('lending_date', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<div class="row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'returnDate',
					'name' => 'Tanggal kembali',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control <?= form_error('return_date') === '' ?: 'is-invalid' ?>" id="returnDate" min="<?= html_escape(mdate('%Y-%m-%d')) ?>" name="return_date" type="date" value="<?= html_escape(set_value('return_date', $lending['return_date'] ?? mdate('%Y-%m-%d'))) ?>" />
			<?= form_error('return_date', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
<?php $this->load->view('templates/form_close') ?>