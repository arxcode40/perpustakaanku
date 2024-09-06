<nav class="bg-body-tertiary border-bottom navbar navbar-expand-lg shadow sticky-top">
	<div class="container">
		<!-- Navbar Header -->
		<a class="fw-medium navbar-brand text-primary" href="/">PerpustakaanKu</a>
		<button class="navbar-toggler" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar Body -->
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="ms-auto nav nav-pills">
				<!-- Dashboard Link -->
				<li class="nav-item">
					<a class="<?= $this->uri->segment(1) !== NULL ?: 'active' ?> nav-link" href="/">Dasbor</a>
				</li>

				<!-- Data Master Dropdown -->
				<li class="dropdown nav-item">
					<a class="<?= in_array($this->uri->segment(1), array('anggota', 'buku', 'peminjaman', 'pengembalian')) === FALSE ?: 'active' ?> dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#">Data Master</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<h6 class="dropdown-header">Data Master</h6>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'anggota' ?: 'active' ?> dropdown-item" href="/anggota/">Data anggota</a>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'buku' ?: 'active' ?> dropdown-item" href="/buku/">Data buku</a>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'peminjaman' ?: 'active' ?> dropdown-item" href="/peminjaman/">Data peminjaman</a>
						</li>
						<li>
							<a class="<?= $this->uri->segment(1) !== 'pengembalian' ?: 'active' ?> dropdown-item" href="/pengembalian/">Data pengembalian</a>
						</li>
					</ul>
				</li>

				<!-- Profile Dropdown -->
				<li class="dropdown nav-item">
					<a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#">Administrator</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<h6 class="dropdown-header">Administrator</h6>
						</li>
						<li>
							<a class="dropdown-item" href="/profil/">Profil saya</a>
						</li>
						<li>
							<hr class="dropdown-divider" />
						</li>
						<li>
							<a class="dropdown-item" href="/keluar/">Keluar</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>