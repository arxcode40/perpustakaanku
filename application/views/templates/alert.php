<?php if ($alert !== NULL): ?>
	<div class="alert alert-<?= $alert['status'] ?> alert-dismissible fade shadow show">
		<i class="bi bi-<?= $alert['icon'] ?>-circle-fill"></i>
		<span class="ms-2"><?= $alert['text'] ?></span>
		<button class="btn-close" data-bs-dismiss="alert" type="button"></button>
	</div>
<?php endif ?>