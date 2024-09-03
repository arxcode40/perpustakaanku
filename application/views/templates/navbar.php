<nav class="bg-body-tertiary border-bottom navbar navbar-expand-lg shadow sticky-top">
	<div class="container">
		<a class="fw-medium navbar-brand text-primary" href="/">PerpustakaanKu</a>
		<button class="navbar-toggler" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="ms-auto navbar-nav">
				<li class="nav-item">
					<a class="<?= $this->uri->segment(1) === NULL ? 'active' : '' ?> nav-link" href="/">
						<i class="bi bi-speedometer"></i>
						Dasbor
					</a>
				</li>
				<li class="dropdown nav-item">
					<a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#">
						<i class="bi bi-database-fill"></i>
						Data Master
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<h6 class="dropdown-header">
								<i class="bi bi-database-fill"></i>
								Data Master
							</h6>
						</li>
						<li>
							<a class="dropdown-item" href="/anggota/">
								<i class="bi bi-person-fill"></i>
								Data Anggota
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="/buku/">
								<i class="bi bi-book-half"></i>
								Data Buku
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="/peminjaman/">
								<i class="bi bi-box-arrow-up"></i>
								Data Peminjaman
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="/pengembalian/">
								<i class="bi bi-box-arrow-in-down"></i>
								Data Pengembalian
							</a>
						</li>
					</ul>
				</li>
				<li class="dropdown nav-item">
					<a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#">
						<i class="bi bi-person-circle"></i>
						Administrator
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<h6 class="dropdown-header">
								<i class="bi bi-person-circle"></i>
								Administrator
							</h6>
						</li>
						<li>
							<a class="dropdown-item" href="/profil/">
								<i class="bi bi-person-fill"></i>
								Profil Saya
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