<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form alert -->
		<?php $this->load->view('templates/alert', array('alert' => $this->session->flashdata('alert'))) ?>
		
		<!-- Breadcrumb -->
		<nav class="mb-3">
			<ol class="bg-body-tertiary breadcrumb p-3 rounded shadow">
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="/">
						<i class="bi bi-house-door-fill"></i>
						Beranda
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-person-standing"></i>
					Data anggota
				</li>
			</ol>
		</nav>

		<!-- Members datatable -->
		<div class="card shadow">
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-table"></i>
					Tabel anggota
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
							<button class="dropdown-item" onclick="tableToCSV('<?= $settings['application_name'] ?>', '<?= $title ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
								<i class="bi bi-filetype-csv"></i>
								CSV
							</button>
						</li>
						<li>
							<button class="dropdown-item" onclick="tableToExcel('<?= $settings['application_name'] ?>', '<?= $title ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
								<i class="bi bi-filetype-xlsx"></i>
								Excel
							</button>
						</li>
						<li>
							<button class="dropdown-item" onclick="tableToPDF('<?= $settings['application_name'] ?>', '<?= $title ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
								<i class="bi bi-filetype-pdf"></i>
								PDF
							</button>
						</li>
						<li>
							<a class="dropdown-item" href="/anggota/laporan/" target="_blank">
								<i class="bi bi-printer-fill"></i>
								Cetak
							</a>
						</li>
					</ul>
				</div>
				<a class="btn btn-primary btn-sm shadow" href="/anggota/tambah/">
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
								<th class="text-start" scope="col">#</th>
								<th scope="col">Kode</th>
								<th scope="col">Nama</th>
								<th scope="col">Jenis Kelamin</th>
								<th scope="col">Email</th>
								<th class="text-start" scope="col">No. Telp</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>

						<!-- Table body -->
						<tbody class="table-group-divider">
							<?php $i = 1 ?>
							<?php foreach ($members as $member): ?>
								<tr class="align-middle">
									<th class="text-start" scope="row"><?= $i++ ?></th>
									<td><?= html_escape($member['id']) ?></td>
									<td><?= html_escape($member['fullname']) ?></td>
									<td><?= html_escape($member['gender']) ?></td>
									<td><?= html_escape($member['email']) ?></td>
									<td class="text-start"><?= html_escape($member['phone_number']) ?></td>
									<td class="text-nowrap">
										<a class="btn btn-primary btn-sm shadow" href="/anggota/ubah/<?= html_escape($member['id']) ?>">
											<i class="bi bi-pencil-square"></i>
											<span class="d-none d-sm-inline">Ubah</span>
										</a>
										<?= form_open('anggota/hapus', array('class' => 'd-inline-block'), array('id' => html_escape($member['id']))) ?>
											<button class="btn btn-danger btn-sm shadow" type="submit">
												<i class="bi bi-trash-fill"></i>
												<span class="d-none d-sm-inline">Hapus</span>
											</button>
										<?= form_close() ?>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- Report table -->
	<div data-bs-theme="light" hidden="hidden">
		<div class="container py-3 text-body-emphasis" id="reportPage">
			<h4 class="mb-0 text-center">Laporan <?= $settings['application_name'] ?></h4>
			<h4 class="mb-3 text-center"><?= $title ?></h4>

			<table class="align-middle mb-0 table table-borderless table-printed table-sm w-100" id="reportTable">
				<!-- Table header -->
				<thead>
					<tr class="align-middle">
						<th class="text-start" scope="col">#</th>
						<th scope="col">Kode</th>
						<th scope="col">Nama</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Email</th>
						<th class="text-start" scope="col">No. Telp</th>
						<th scope="col">Alamat</th>
					</tr>
				</thead>

				<!-- Table body -->
				<tbody class="table-group-divider">
					<?php $i = 1 ?>
					<?php foreach ($members as $member): ?>
						<tr class="align-middle">
							<th class="text-start" scope="row"><?= $i++ ?></th>
							<td><?= html_escape($member['id']) ?></td>
							<td><?= html_escape($member['fullname']) ?></td>
							<td><?= html_escape($member['gender']) ?></td>
							<td><?= html_escape($member['email']) ?></td>
							<td class="text-start"><?= html_escape($member['phone_number']) ?></td>
							<td><?= html_escape($member['address']) ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</main>