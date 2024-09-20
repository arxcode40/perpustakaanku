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
							'icon' => 'book-half',
							'name' => 'Data buku'
						)
					)
				)
			)
		?>

		<!-- Books datatable -->
		<?php $thead = array('#', 'Kode', 'Judul', 'Tahun terbit', 'Pengarang', 'Penerbit', 'Aksi') ?>
		<?php foreach ($books as $index => $book): ?>
			<?php $tbody[] = array($index + 1, $book['id'], $book['title'], $book['publication_year'], $book['author'], $book['publisher'], $book['id']) ?>
		<?php endforeach ?>
		<?php
			$this->load->view(
				'templates/datatable',
				array(
					'name' => 'buku',
					'heads' => $thead,
					'rows' => $tbody)
			)
		?>
		<?php unset($tbody) ?>
	</div>

	<!-- Report table -->
	<?php $thead = array('#', 'Kode', 'Judul', 'Tahun terbit', 'Pengarang', 'Penerbit') ?>
	<?php foreach ($books as $index => $book): ?>
		<?php $tbody[] = array($index + 1, $book['id'], $book['title'], $book['publication_year'], $book['author'], $book['publisher']) ?>
	<?php endforeach ?>
	<?php
		$this->load->view(
			'templates/report',
			array(
				'name' => 'buku',
				'heads' => $thead,
				'rows' => $tbody
			)
		)
	?>
</main>