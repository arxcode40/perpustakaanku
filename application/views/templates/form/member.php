<?php
	$this->load->view(
		'templates/form_open',
		array(
			'icon' => $operation === 'Tambah' ? 'plus-lg' : 'pencil-square',
			'name' => 'anggota'
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
					'name' => 'Kode anggota',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($member['id'] ?? $last_id) ?>" />
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
			<input autofocus="autofocus" class="form-control <?= form_error('fullname') === '' ?: 'is-invalid' ?>" id="fullname" name="fullname" placeholder="Masukkan nama anggota" type="text" value="<?= html_escape(set_value('fullname', $member['fullname'] ?? '')) ?>" />
			<?= form_error('fullname', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<fieldset class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'legend',
					'name' => 'Jenis kelamin',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<div class="form-check form-check-inline">
				<input class="form-check-input <?= form_error('gender') === '' ?: 'is-invalid' ?>" <?= set_radio('gender', 'Laki-laki', isset($member['gender']) === FALSE ? TRUE : $member['gender'] === 'Laki-laki') ?> id="male" name="gender" type="radio" value="Laki-laki" />
				<label class="form-check-label" for="male">Laki-laki</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input <?= form_error('gender') === '' ?: 'is-invalid' ?>" <?= set_radio('gender', 'Perempuan', isset($member['gender']) === FALSE ? FALSE : $member['gender'] === 'Perempuan') ?> id="female" name="gender" type="radio" value="Perempuan" />
				<label class="form-check-label" for="female">Perempuan</label>
			</div>
			<?= form_error('gender', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</fieldset>
	<div class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'email',
					'name' => 'Email anggota',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control <?= form_error('email') === '' ?: 'is-invalid' ?>" id="email" name="email" placeholder="Masukkan email anggota" type="email" value="<?= html_escape(set_value('email', $member['email'] ?? '')) ?>" />
			<?= form_error('email', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<div class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'phoneNumber',
					'name' => 'Nomor telepon',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control <?= form_error('phone_number') === '' ?: 'is-invalid' ?>" id="phoneNumber" name="phone_number" placeholder="Masukkan nomor telepon" type="tel" value="<?= html_escape(set_value('phone_number', $member['phone_number'] ?? '')) ?>" />
			<?= form_error('phone_number', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<div class="row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'address',
					'name' => 'Alamat anggota',
					'required' => FALSE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<textarea class="form-control <?= form_error('address') === '' ?: 'is-invalid' ?>" id="address" name="address" placeholder="Masukkan alamat anggota"><?= html_escape(set_value('address', $member['address'] ?? '')) ?></textarea>
			<?= form_error('address', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
<?php $this->load->view('templates/form_close') ?>