<footer class="border-top <?= $settings['application_theme'] === 'dark' ? 'bg-body-tertiary' : 'text-bg-dark' ?>">
	<div class="container py-3">
		<div class="align-items-md-center d-flex flex-column flex-md-row justify-content-md-between">
			<!-- Application name -->
			<div class="align-items-center d-flex">
				<img alt="Logo PerpustakaanKu" loading="lazy" src="/favicon.svg" width="24">
				<h5 class="text-primary mb-md-0 ms-2"><?= $settings['application_name'] ?></h5>
			</div>

			<!-- Copyright -->
			<p class="mb-0">Copyright &copy; <?= mdate('%Y') ?> PerpustakaanKu. All Rights Reserved.</p>
		</div>
	</div>
</footer>