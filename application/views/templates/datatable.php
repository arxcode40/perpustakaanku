<div class="card shadow" data-aos="fade-up" data-aos-delay="100">
	<!-- Card header -->
	<div class="align-items-center card-header d-flex">
		<h5 class="mb-0 me-auto">
			<i class="bi bi-table"></i>
			Tabel <?= $name ?>
		</h5>
		<?php $this->load->view('templates/export') ?>
		<a class="btn btn-primary btn-sm shadow" href="<?= base_url(array($name, 'tambah')) ?>">
			<i class="bi bi-plus-lg"></i>
			<span class="d-none d-sm-inline">Tambah</span>
		</a>
	</div>

	<!-- Card body -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="align-middle mb-0 table table-bordered table-hover table-striped w-100" id="dataTable">
				<!-- Table header -->
				<thead>
					<tr class="align-middle">
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
								<?php elseif ($index + 1 === count($row)): ?>
									<td class="text-nowrap">
										<?php
											$this->load->view(
												'templates/action',
												array(
													'name' => $name,
													'id' => $column
												)
											)
										?>
									</td>
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
</div>