<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form alert -->
		<?php $this->load->view('templates/alert', array('alert' => $this->session->flashdata('alert'))) ?>
				
		<!-- Breadcrumb -->
		<nav class="mb-3">
			<ol class="bg-body-tertiary breadcrumb p-3 rounded shadow" data-aos="fade-right">
				<li class="breadcrumb-item">
					<a class="link-underline link-underline-opacity-0" href="<?= base_url() ?>">
						<i class="bi bi-house-door-fill"></i>
						Beranda
					</a>
				</li>
				<li class="active breadcrumb-item">
					<i class="bi bi-speedometer"></i>
					Dasbor
				</li>
			</ol>
		</nav>

		<!-- Dashboard panel -->
		<div class="g-3 row">
			<!-- Card panel -->
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card shadow" data-aos="fade-up" data-aos-delay="50">
					<!-- Card header -->
					<h5 class="card-header">Data anggota</h5>

					<!-- Card body -->
					<div class="card-body">
						<h1 class="mb-0"><?= html_escape($total_members) ?></h1>
					</div>

					<!-- Card footer -->
					<div class="card-footer">
						<a class="btn btn-primary" href="<?= base_url('anggota') ?>">
							Lihat selengkapnya
							<i class="bi bi-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>

			<!-- Card panel -->
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card shadow" data-aos="fade-up" data-aos-delay="100">
					<!-- Card header -->
					<h5 class="card-header">Data buku</h5>

					<!-- Card body -->
					<div class="card-body">
						<h1 class="mb-0"><?= html_escape($total_books) ?></h1>
					</div>

					<!-- Card footer -->
					<div class="card-footer">
						<a class="btn btn-primary" href="<?= base_url('buku') ?>">
							Lihat selengkapnya
							<i class="bi bi-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>

			<!-- Card panel -->
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card shadow" data-aos="fade-up" data-aos-delay="150">
					<!-- Card header -->
					<h5 class="card-header">Data peminjaman</h5>

					<!-- Card body -->
					<div class="card-body">
						<h1 class="mb-0"><?= html_escape($total_lendings) ?></h1>
					</div>

					<!-- Card footer -->
					<div class="card-footer">
						<a class="btn btn-primary" href="<?= base_url('peminjaman') ?>">
							Lihat selengkapnya
							<i class="bi bi-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>

			<!-- Card panel -->
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card shadow" data-aos="fade-up" data-aos-delay="200">
					<!-- Card header -->
					<h5 class="card-header">Data pengembalian</h5>

					<!-- Card body -->
					<div class="card-body">
						<h1 class="mb-0"><?= html_escape($total_returns) ?></h1>
					</div>

					<!-- Card footer -->
					<div class="card-footer">
						<a class="btn btn-primary" href="<?= base_url('pengembalian') ?>">
							Lihat selengkapnya
							<i class="bi bi-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>