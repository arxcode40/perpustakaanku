<nav class="bg-body-tertiary border-bottom navbar navbar-expand-lg shadow sticky-top">
	<div class="container">
		<!-- Navbar header -->
		<a class="align-items-center d-flex navbar-brand" href="/">
			<img alt="Logo PerpustakaanKu" loading="lazy" src="/favicon.svg" width="24">
			<span class="fw-medium ms-2"><?= html_escape($settings['application_name']) ?></span>
		</a>
		<button class="navbar-toggler" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar body -->
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="flex-column flex-lg-row ms-auto nav nav-pills">
				<!-- Dashboard link -->
				<li class="nav-item">
					<a class="<?= $this->uri->segment(1) !== NULL ?: 'active' ?> nav-link" href="/">
						<i class="bi bi-speedometer"></i>
						Dasbor
					</a>
				</li>

				<!-- Data master dropdown -->
				<li class="dropdown nav-item">
					<a class="<?= in_array($this->uri->segment(1), array('anggota', 'buku', 'peminjaman', 'pengembalian')) === FALSE ?: 'active' ?> dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#">
						<i class="bi bi-database-fill"></i>
						Data Master
					</a>

					<ul class="dropdown-menu dropdown-menu-lg-end">
						<li>
							<h6 class="dropdown-header">
							<i class="bi bi-database-fill"></i>
								Data Master
							</h6>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'anggota' ?: 'active' ?> dropdown-item" href="/anggota/">
								<i class="bi bi-person-standing"></i>
								Data anggota
							</a>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'buku' ?: 'active' ?> dropdown-item" href="/buku/">
								<i class="bi bi-book-half"></i>
								Data buku
							</a>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'peminjaman' ?: 'active' ?> dropdown-item" href="/peminjaman/">
								<i class="bi bi-box-arrow-up"></i>
								Data peminjaman
							</a>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'pengembalian' ?: 'active' ?> dropdown-item" href="/pengembalian/">
								<i class="bi bi-box-arrow-in-down"></i>
								Data pengembalian
							</a>
						</li>
					</ul>
				</li>

				<!-- Profile dropdown -->
				<li class="dropdown nav-item">
					<a class="<?= in_array($this->uri->segment(1), array('profil', 'pengaturan')) === FALSE ?: 'active' ?> dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#">
						<i class="bi bi-person-circle"></i>
						Administrator
					</a>

					<ul class="dropdown-menu dropdown-menu-lg-end">
						<li>
							<h6 class="dropdown-header">
								<i class="bi bi-person-circle"></i>
								Administrator
							</h6>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'profil' ?: 'active' ?> dropdown-item" href="/profil/">
								<i class="bi bi-person-fill"></i>
								Profil saya
							</a>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'pengaturan' ?: 'active' ?> dropdown-item" href="/pengaturan/">
								<i class="bi bi-gear-fill"></i>
								Pengaturan
							</a>
						</li>
						<li>
							<hr class="dropdown-divider" />
						</li>
						<li>
							<a class="dropdown-item" href="/keluar/">
								<i class="bi bi-box-arrow-right"></i>
								Keluar
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>