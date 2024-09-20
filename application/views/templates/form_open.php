<?=
	form_open(
		uri_string(),
		array(
			'class' => 'card shadow',
			'data-aos' => $operation === 'Masuk' ? 'zoom-in' : 'fade-up',
			'data-aos-delay' => $operation === 'Masuk' ? NULL : 100
		)
	)
?>
	<!-- Card header -->
	<div class="align-items-center card-header d-flex">
		<?php if (in_array($operation, array('Masuk', 'Simpan')) === FALSE): ?>
			<h5 class="mb-0 me-auto">
				<i class="bi bi-plus-lg"></i>
				<?= $operation ?> data <?= $name ?>
			</h5>
			<a class="btn btn-secondary btn-sm shadow" href="<?= base_url($name) ?>">
				<i class="bi bi-arrow-left"></i>
				<span class="d-none d-sm-inline">Kembali</span>
			</a>
		<?php else: ?>
			<h5 class="mb-0 me-auto">
				<i class="bi bi-<?= $icon ?>"></i>
				<?= $name ?>
			</h5>
		<?php endif ?>
	</div>

	<!-- Card body -->
	<div class="card-body">