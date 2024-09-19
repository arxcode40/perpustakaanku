<div class="dropdown me-1">
	<button class="btn btn-secondary btn-sm dropdown-toggle shadow" data-bs-toggle="dropdown" type="button">
		<i class="bi bi-upload"></i>
		<span class="d-none d-sm-inline">Ekspor</span>
	</button>

	<!-- Export table -->
	<ul class="dropdown-menu dropdown-menu-end">
		<li>
			<h6 class="dropdown-header">
				<i class="bi bi-upload"></i>
				Ekspor
			</h6>
		</li>
		<li>
			<button class="dropdown-item" onclick="tableToCSV('<?= $settings['application_name'] ?>', '<?= $title ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
				<i class="bi bi-filetype-csv"></i>
				CSV
			</button>
		</li>
		<li>
			<button class="dropdown-item" onclick="tableToExcel('<?= $settings['application_name'] ?>', '<?= $title ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
				<i class="bi bi-filetype-xlsx"></i>
				Excel
			</button>
		</li>
		<li>
			<button class="dropdown-item" onclick="tableToPDF('<?= $settings['application_name'] ?>', '<?= $title ?>', '<?= mdate('%Y%m%d%H%i%s') ?>');" type="button">
				<i class="bi bi-filetype-pdf"></i>
				PDF
			</button>
		</li>
		<li>
			<a class="dropdown-item" href="<?= base_url(array($name, 'laporan')) ?>" target="_blank">
				<i class="bi bi-printer-fill"></i>
				Cetak
			</a>
		</li>
	</ul>
</div>