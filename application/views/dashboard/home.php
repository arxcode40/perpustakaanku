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
				<li class="active breadcrumb-item">Dasbor</li>
			</ol>
		</nav>

		<!-- Dashboard Panel -->
		<div class="g-3 row">
			<!-- Card Panel -->
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card shadow">
					<!-- Card Header -->
					<h5 class="card-header">Data anggota</h5>

					<!-- Card Body -->
					<div class="card-body">
						<h1 class="mb-0">100</h1>
					</div>

					<!-- Card Footer -->
					<div class="card-footer">
						<a class="btn btn-primary" href="/anggota/">Lihat selengkapnya</a>
					</div>
				</div>
			</div>

			<!-- Card Panel -->
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card shadow">
					<!-- Card Header -->
					<h5 class="card-header">Data buku</h5>

					<!-- Card Body -->
					<div class="card-body">
						<h1 class="mb-0">100</h1>
					</div>

					<!-- Card Footer -->
					<div class="card-footer">
						<a class="btn btn-primary" href="/buku/">Lihat selengkapnya</a>
					</div>
				</div>
			</div>

			<!-- Card Panel -->
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card shadow">
					<!-- Card Header -->
					<h5 class="card-header">Data peminjaman</h5>

					<!-- Card Body -->
					<div class="card-body">
						<h1 class="mb-0">100</h1>
					</div>

					<!-- Card Footer -->
					<div class="card-footer">
						<a class="btn btn-primary" href="/peminjaman/">Lihat selengkapnya</a>
					</div>
				</div>
			</div>

			<!-- Card Panel -->
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card shadow">
					<!-- Card Header -->
					<h5 class="card-header">Data pengembalian</h5>

					<!-- Card Body -->
					<div class="card-body">
						<h1 class="mb-0">100</h1>
					</div>

					<!-- Card Footer -->
					<div class="card-footer">
						<a class="btn btn-primary" href="/pengembalian/">Lihat selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>