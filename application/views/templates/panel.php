<div class="col-sm-6 col-md-4 col-lg-3">
	<div class="card shadow" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
		<!-- Card header -->
		<h5 class="card-header">Data <?= html_escape($name) ?></h5>

		<!-- Card body -->
		<div class="card-body">
			<h1 class="mb-0"><?= html_escape($count) ?></h1>
		</div>

		<!-- Card footer -->
		<div class="card-footer">
			<a class="btn btn-primary" href="<?= html_escape(base_url($name)) ?>">
				Lihat selengkapnya
				<i class="bi bi-arrow-right"></i>
			</a>
		</div>
	</div>
</div>