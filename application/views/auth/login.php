<main class="my-auto">
	<div class="container-auth py-3">
		<?= form_open(uri_string(), array('class' => 'card shadow')) ?>
			<!-- Form Header -->
			<h5 class="card-header">Masuk</h5>

			<!-- Form Body -->
			<div class="card-body">
				<!-- Form Alert -->
				<?php $this->load->view('templates/alert', array('alert' => $this->session->flashdata('alert'))) ?>
				
				<div class="g-3 row">
					<!-- Username Input -->
					<div class="col-12">
						<label class="form-label" for="username">Nama pengguna</label>
						<input autocapitalize="off" autocomplete="username" autofocus="autofocus" class="form-control <?= form_error('username') === '' ?: 'is-invalid' ?>" id="username" name="username" placeholder="Masukkan nama pengguna" type="text" value="<?= set_value('username') ?>" />
						<?= form_error('username', '<div class="invalid-feedback">', '</div>') ?>
					</div>

					<!-- Password Input -->
					<div class="col-12">
						<label class="form-label" for="password">Kata sandi</label>
						<input autocomplete="current-password" class="form-control <?= form_error('password') === '' ?: 'is-invalid' ?>" id="password" name="password" placeholder="Masukkan kata sandi" type="password" />
						<?= form_error('password', '<div class="invalid-feedback">', '</div>') ?>

						<!-- Show Password Toggler -->
						<div class="form-check mt-1">
							<input class="form-check-input" onchange="showPassword();" id="showPasswordCheck" tabindex="-1" type="checkbox" />
							<label class="form-check-label user-select-none" for="showPasswordCheck">Lihat kata sandi</label>
						</div>
					</div>
				</div>
			</div>

			<!-- Form Action -->
			<div class="card-footer">
				<button class="btn btn-primary" type="submit">Masuk</button>
				<button class="btn btn-secondary" type="reset">Batal</button>
			</div>
		<?= form_close() ?>
	</div>
</main>