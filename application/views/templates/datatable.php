<div class="card shadow" data-aos="fade-up" data-aos-delay="100">
	<!-- Card header -->
	<div class="align-items-center card-header d-flex">
		<h5 class="mb-0 me-auto">
			<i class="bi bi-table"></i>
			Tabel <?= html_escape($name) ?>
		</h5>
		<div class="dropdown me-1">
			<button class="btn btn-secondary btn-sm dropdown-toggle shadow" data-bs-toggle="dropdown" type="button">
				<i class="bi bi-upload"></i>
				<span class="d-none d-sm-inline">Ekspor</span>
			</button>

			<!-- Export table -->
			<ul class="dropdown-menu dropdown-menu-end">
				<li>
					<h6 class="dropdown-header">
						<i class="bi bi-upload"></i>
						Ekspor
					</h6>
				</li>
				<li>
					<button class="dropdown-item" onclick="tableToCSV('<?= html_escape($settings['application_name']) ?>', '<?= html_escape($title) ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
						<i class="bi bi-filetype-csv"></i>
						CSV
					</button>
				</li>
				<li>
					<button class="dropdown-item" onclick="tableToExcel('<?= html_escape($settings['application_name']) ?>', '<?= html_escape($title) ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
						<i class="bi bi-filetype-xlsx"></i>
						Excel
					</button>
				</li>
				<li>
					<button class="dropdown-item" onclick="tableToPDF('<?= html_escape($settings['application_name']) ?>', '<?= html_escape($title) ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
						<i class="bi bi-filetype-pdf"></i>
						PDF
					</button>
				</li>
				<li>
					<a class="dropdown-item" href="<?= base_url(array(html_escape($name), 'laporan')) ?>" target="_blank">
						<i class="bi bi-printer-fill"></i>
						Cetak
					</a>
				</li>
			</ul>
		</div>
		<a class="btn btn-primary btn-sm shadow" href="<?= base_url(array(html_escape($name), 'tambah')) ?>">
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
							<th class="text-start" scope="col"><?= html_escape($head) ?></th>
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
										<a class="btn btn-primary btn-sm shadow" href="<?= base_url(array(html_escape($name), 'ubah', html_escape($column))) ?>">
											<i class="bi bi-pencil-square"></i>
											<span class="d-none d-sm-inline">Ubah</span>
										</a>
										<?=
											form_open(
												"$name/hapus",
												array('class' => 'd-inline-block'),
												array('id' => html_escape($column))
											)
										?>
											<button class="btn btn-danger btn-sm shadow" type="submit">
												<i class="bi bi-trash-fill"></i>
												<span class="d-none d-sm-inline">Hapus</span>
											</button>
										<?= form_close() ?>
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