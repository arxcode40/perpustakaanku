<div hidden="hidden">
	<div class="container py-3 text-body-emphasis" data-bs-theme="light" id="reportPage">
		<h4 class="mb-0 text-center">Laporan <?= $settings['application_name'] ?></h4>
		<h4 class="mb-3 text-center"><?= $title ?></h4>

		<table class="align-middle mb-0 table table-borderless table-printed table-sm w-100" id="reportTable">
			<!-- Table header -->
			<thead>
				<tr class="align-middle table-dark">
					<?php foreach ($heads as $head): ?>
						<th class="text-start" scope="col"><?= $head ?></th>
					<?php endforeach ?>
				</tr>
			</thead>

			<!-- Table body -->
			<tbody class="table-group-divider">
				<?php foreach ($rows as $row): ?>
					<tr class="align-middle">
						<?php foreach ($row as $index => $column): ?>
							<?php if ($index === 0): ?>
								<th class="text-start" scope="row"><?= html_escape($column) ?></th>
							<?php else: ?>
								<td class="text-start"><?= html_escape($column) ?></td>
							<?php endif ?>
						<?php endforeach ?>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>