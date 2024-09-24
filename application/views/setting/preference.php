<main class="flex-grow-1">
	<div class="container py-3">
		<!-- Form alert -->
		<?php
			$this->load->view(
				'templates/alert',
				array('alert' => $this->session->flashdata('alert'))
			)
		?>
		
		<!-- Breadcrumb -->
		<?php
			$this->load->view(
				'templates/breadcrumb',
				array(
					'items' => array(
						array(
							'url' => base_url(),
							'icon' => 'house-door-fill',
							'name' => 'Beranda'
						),
						array(
							'icon' => 'gear-fill',
							'name' => 'Pengaturan'
						)
					)
				)
			)
		?>

		<!-- Settings preference form -->
		<?php
			$this->load->view(
				'templates/form_open',
				array(
					'operation' => 'Simpan',
					'icon' => 'gear-fill',
					'name' => 'Pengaturan'
				)
			)
		?>
			<div class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'tag' => 'label',
							'key' => 'applicationName',
							'name' => 'Nama aplikasi',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-8 col-lg-9">
					<input autofocus="autofocus" class="form-control <?= form_error('application_name') === '' ?: 'is-invalid' ?>" id="applicationName" name="application_name" placeholder="Masukkan nama pengguna" type="text" value="<?= html_escape(set_value('application_name', $settings['application_name'])) ?>" />
					<?= form_error('application_name', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</div>
			<fieldset class="mb-3 row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'tag' => 'legend',
							'name' => 'Tema aplikasi',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-8 col-lg-9">
					<div class="form-check">
						<input class="form-check-input" <?= set_radio('application_theme', 'light', html_escape($settings['application_theme']) === 'light') ?> id="lightTheme" name="application_theme" type="radio" value="light" />
						<label class="form-check-label" for="lightTheme">Tema terang</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" <?= set_radio('application_theme', 'dark', html_escape($settings['application_theme']) === 'dark') ?> id="darkTheme" name="application_theme" type="radio" value="dark" />
						<label class="form-check-label" for="darkTheme">Tema gelap</label>
					</div>
					<?= form_error('application_theme', '<div class="invalid-feedback">', '</div>') ?>
				</div>
			</fieldset>
			<div class="row">
				<?php
					$this->load->view(
						'templates/label',
						array(
							'tag' => 'label',
							'key' => 'libraryFines',
							'name' => 'Denda perpustakaan',
							'required' => TRUE
						)
					)
				?>
				<div class="col-md-8 col-lg-9">
					<div class="has-validation input-group">
						<span class="input-group-text">Rp</span>
						<input class="form-control <?= form_error('library_fines') === '' ?: 'is-invalid' ?>" id="libraryFines" inputmode="numeric" name="library_fines" oninput="currencyFormat();" placeholder="Masukkan denda perpustakaan" type="text" value="<?= html_escape(set_value('library_fines', number_format($settings['library_fines'], 0, ',', '.'))) ?>" />
						<?= form_error('library_fines', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
			</div>
		<?php $this->load->view('templates/form_close') ?>
	</div>
</main>