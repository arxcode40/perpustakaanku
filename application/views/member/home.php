<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form Alert -->
		<?php $this->load->view('templates/alert', array('alert' => $this->session->flashdata('alert'))) ?>
		
		<!-- Breadcrumb -->
		<nav class="mb-3">
			<ol class="bg-body-tertiary breadcrumb p-3 rounded shadow">
				<li class="breadcrumb-item">
					<a href="/">Beranda</a>
				</li>
				<li class="active breadcrumb-item">Data anggota</li>
			</ol>
		</nav>

		<!-- Member DataTable -->
		<div class="card shadow">
			<!-- Card Header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">Tabel anggota</h5>
				<a class="btn btn-primary btn-sm shadow" href="/anggota/tambah">Tambah</a>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<div class="table-responsive">
					<table class="align-middle mb-0 table table-bordered table-hover table-striped w-100" id="dataTable">
						<!-- Table Header -->
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

						<!-- Table Body -->
						<tbody class="table-group-divider">
							<?php for($i=0;$i<20;$i++): ?>
							<tr class="align-middle">
								<th class="text-start" scope="row">1</th>
								<td>M0001</td>
								<td>Arya Putra Sadewa</td>
								<td>Laki-laki</td>
								<td>aryaputrasadewa40@gmail.com</td>
								<td class="text-start">0895339792382</td>
								<td class="text-nowrap">
									<a class="btn btn-primary btn-sm shadow" href="/anggota/ubah/0">Ubah</a>
									<a class="btn btn-danger btn-sm shadow" href="/anggota/hapus/0">Hapus</a>
								</td>
							</tr>
							<?php endfor ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>