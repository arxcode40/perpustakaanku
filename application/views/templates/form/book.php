<?php
	$this->load->view(
		'templates/form_open',
		array(
			'icon' => $operation === 'Tambah' ? 'plus-lg' : 'pencil-square',
			'name' => 'buku'
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
					'name' => 'Kode buku',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control" disabled="disabled" id="id" type="text" value="<?= html_escape($book['id'] ?? $last_id) ?>" />
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
			<input autofocus="autofocus" class="form-control <?= form_error('title') === '' ?: 'is-invalid' ?>" id="title" name="title" placeholder="Masukkan judul buku" type="text" value="<?= html_escape(set_value('title', $book['title'] ?? '')) ?>" />
			<?= form_error('title', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<div class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'publicationYear',
					'name' => 'Tahun terbit',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control <?= form_error('publication_year') === '' ?: 'is-invalid' ?>" id="publicationYear" name="publication_year" placeholder="Masukkan tahun terbit buku" type="number" value="<?= html_escape(set_value('publication_year', $book['publication_year'] ?? mdate('%Y'))) ?>" />
			<?= form_error('publication_year', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<div class="mb-3 row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'author',
					'name' => 'Pengarang buku',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control <?= form_error('author') === '' ?: 'is-invalid' ?>" id="author" name="author" placeholder="Masukkan pengarang buku" type="text" value="<?= html_escape(set_value('author', $book['author'] ?? '')) ?>" />
			<?= form_error('author', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
	<div class="row">
		<?php
			$this->load->view(
				'templates/label',
				array(
					'tag' => 'label',
					'key' => 'publisher',
					'name' => 'Penerbit buku',
					'required' => TRUE
				)
			)
		?>
		<div class="col-md-8 col-lg-9">
			<input class="form-control <?= form_error('publisher') === '' ?: 'is-invalid' ?>" id="publisher" name="publisher" placeholder="Masukkan penerbit buku" type="text" value="<?= html_escape(set_value('publisher', $book['publisher'] ?? '')) ?>" />
			<?= form_error('publisher', '<div class="invalid-feedback">', '</div>') ?>
		</div>
	</div>
<?php $this->load->view('templates/form_close') ?>