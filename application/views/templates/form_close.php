	</div>

	<!-- Card footer -->
	<div class="card-footer">
		<button class="btn btn-primary shadow" type="submit">
			<?php
				$icon = array(
					'Masuk' => 'box-arrow-in-right',
					'Tambah' => 'plus-lg',
					'Ubah' => 'pencil-square',
					'Simpan' => 'floppy-fill'
				)
			?>
			<i class="bi bi-<?= $icon[$operation] ?>"></i>
			<?= html_escape($operation) ?>
		</button>
		<button class="btn btn-secondary shadow" type="reset">
			<i class="bi bi-x-lg"></i>
			Reset
		</button>
	</div>
<?= form_close() ?>