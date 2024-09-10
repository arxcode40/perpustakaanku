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

		<!-- Member datatable -->
		<div class="card shadow">
			<!-- Card header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">
					<i class="bi bi-table"></i>
					Tabel anggota
				</h5>
				<div class="dropdown me-1">
					<button class="btn btn-secondary btn-sm dropdown-toggle shadow" data-bs-toggle="dropdown" type="button">
						<i class="bi bi-box-arrow-up"></i>
						<span class="d-none d-sm-inline">Ekspor</span>
					</button>

					<!-- Export data -->
					<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<h6 class="dropdown-header">
								<i class="bi bi-box-arrow-up"></i>
								Ekspor
							</h6>
						</li>
						<li>
							<button class="dropdown-item" type="button">
								<i class="bi bi-filetype-csv"></i>
								CSV
							</button>
						</li>
						<li>
							<button class="dropdown-item" type="button">
								<i class="bi bi-filetype-xlsx"></i>
								Excel
							</button>
						</li>
						<li>
							<button class="dropdown-item" type="button">
								<i class="bi bi-filetype-pdf"></i>
								PDF
							</button>
						</li>
						<li>
							<button class="dropdown-item" type="button">
								<i class="bi bi-printer-fill"></i>
								Cetak
							</button>
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
							<?php foreach($members as $member): ?>
								<tr class="align-middle">
									<th class="text-start" scope="row"><?= $i ?></th>
									<td><?= html_escape($member['member_id']) ?></td>
									<td><?= html_escape($member['member_name']) ?></td>
									<td><?= html_escape($member['member_gender']) ?></td>
									<td><?= html_escape($member['member_email']) ?></td>
									<td class="text-start"><?= html_escape($member['member_phone']) ?></td>
									<td class="text-nowrap">
										<a class="btn btn-primary btn-sm shadow" href="/anggota/ubah/<?= html_escape($member['member_id']) ?>">
											<i class="bi bi-pencil-square"></i>
											<span class="d-none d-sm-inline">Ubah</span>
										</a>
										<?= form_open('anggota/hapus', array('class' => 'd-inline-block'), array('member_id' => html_escape($member['member_id']))) ?>
											<button class="btn btn-danger btn-sm shadow" type="submit">
												<i class="bi bi-trash-fill"></i>
												<span class="d-none d-sm-inline">Hapus</span>
											</button>
										<?= form_close() ?>
									</td>
								</tr>
							<?php $i++ ?>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>