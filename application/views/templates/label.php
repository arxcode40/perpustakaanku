<<?= $tag ?> class="col-md-4 col-lg-3 col-form-label d-md-flex <?= $tag === 'label' ?: 'pt-0' ?>" for="<?= $key ?>">
	<?= $name ?><?php if ($required === TRUE): ?><b class="text-danger">*</b><?php endif ?>
	<span class="d-none d-md-block fw-medium ms-auto">:</span>
</<?= $tag ?>>