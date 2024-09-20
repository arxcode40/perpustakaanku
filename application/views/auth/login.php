<main class="my-auto">
	<div class="container-auth py-3">
		<?php
			$this->load->view(
				'templates/form_open',
				array(
					'operation' => 'Masuk',
					'icon' => 'box-arrow-in-right',
					'name' => 'Masuk'
				)
			)
		?>
			<!-- Form alert -->
			<?php
				$this->load->view(
					'templates/alert',
					array('alert' => $this->session->flashdata('alert'))
				)
			?>
			
			<div class="g-3 row">
				<!-- Username input -->
				<div class="col-12">
					<label class="form-label" for="username">
						Nama pengguna<b class="text-danger">*</b>
					</label>
					<div class="has-validation input-group">
						<span class="input-group-text">
							<i class="bi bi-person-fill"></i>
						</span>
						<input autocapitalize="off" autocomplete="username" autofocus="autofocus" class="form-control <?= form_error('username') === '' ?: 'is-invalid' ?>" id="username" name="username" placeholder="Masukkan nama pengguna" type="text" value="<?= html_escape(set_value('username')) ?>" />
						<?= form_error('username', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>

				<!-- Password input -->
				<div class="col-12">
					<label class="form-label" for="password">
						Kata sandi<b class="text-danger">*</b>
					</label>
					<div class="has-validation input-group">
						<span class="input-group-text">
							<i class="bi bi-key-fill"></i>
						</span>
						<input autocomplete="current-password" class="form-control <?= form_error('password') === '' ?: 'is-invalid' ?>" id="password" name="password" placeholder="Masukkan kata sandi" type="password" />
						<button class="btn btn-secondary" onclick="showPassword();" tabindex="-1" type="button">
							<i class="bi bi-eye-slash pe-none"></i>
						</button>
						<?= form_error('password', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>
		<?php $this->load->view('templates/form_close') ?>
	</div>
</main>