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
				<li class="active breadcrumb-item">Data buku</li>
			</ol>
		</nav>

		<!-- Member DataTable -->
		<div class="card shadow">
			<!-- Card Header -->
			<div class="align-items-center card-header d-flex">
				<h5 class="mb-0 me-auto">Tabel buku</h5>
				<a class="btn btn-primary btn-sm shadow" href="/buku/tambah/">Tambah</a>
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
								<th scope="col">Judul</th>
								<th class="text-start" scope="col">Tahun terbit</th>
								<th scope="col">Pengarang</th>
								<th scope="col">Penerbit</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>

						<!-- Table Body -->
						<tbody class="table-group-divider">
							<?php for($i=0;$i<20;$i++): ?>
							<tr class="align-middle">
								<th class="text-start" scope="row"><?= $i + 1 ?></th>
								<td>B0001</td>
								<td>Domestic na Kanojo</td>
								<td class="text-start">2014</td>
								<td>Kei Sasuga</td>
								<td>Majalah Shounen</td>
								<td class="text-nowrap">
									<a class="btn btn-primary btn-sm shadow" href="/buku/ubah/0">Ubah</a>
									<a class="btn btn-danger btn-sm shadow" href="/buku/hapus/0">Hapus</a>
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