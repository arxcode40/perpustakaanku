<a class="btn btn-primary btn-sm shadow" href="<?= base_url(array($name, 'ubah', html_escape($id))) ?>">
	<i class="bi bi-pencil-square"></i>
	<span class="d-none d-sm-inline">Ubah</span>
</a>
<?=
	form_open(
		"$name/hapus",
		array('class' => 'd-inline-block'),
		array('id' => html_escape($id))
	)
?>
	<button class="btn btn-danger btn-sm shadow" type="submit">
		<i class="bi bi-trash-fill"></i>
		<span class="d-none d-sm-inline">Hapus</span>
	</button>
<?= form_close() ?>