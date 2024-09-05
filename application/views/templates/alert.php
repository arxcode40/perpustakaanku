<?php if ($alert !== NULL): ?>
	<div class="alert alert-<?= $alert['status'] ?> alert-dismissible fade shadow show">
		<?= $alert['text'] ?>
		<button class="btn-close" data-bs-dismiss="alert" type="button"></button>
	</div>
<?php endif ?>