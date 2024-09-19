<nav class="mb-3">
	<ol class="bg-body-tertiary breadcrumb p-3 rounded shadow" data-aos="fade-right">
		<?php foreach ($items as $item): ?>
			<?php if (isset($item['url']) === FALSE): ?>
				<li class="active breadcrumb-item">
					<i class="bi bi-<?= html_escape($item['icon']) ?>"></i>
					<?= html_escape($item['name']) ?>
				</li>
			<?php else: ?>
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="<?= html_escape($item['url']) ?>">
						<i class="bi bi-<?= html_escape($item['icon']) ?>"></i>
						<?= html_escape($item['name']) ?>
					</a>
				</li>
			<?php endif ?>
		<?php endforeach ?>
	</ol>
</nav>