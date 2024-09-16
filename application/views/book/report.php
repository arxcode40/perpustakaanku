<main class="flex-grow-1">
	<div class="container py-3 text-body-emphasis">
		<h4 class="mb-0 text-center">Laporan <?= $settings['application_name'] ?></h4>
		<h4 class="mb-3 text-center"><?= str_replace('Laporan ', '', $title) ?></h4>

		<table class="align-middle border-black mb-0 table table-bordered table-sm w-100">
			<!-- Table header -->
			<thead>
				<tr class="align-middle">
					<th class="text-start" scope="col">#</th>
					<th scope="col">Kode</th>
					<th scope="col">Judul</th>
					<th class="text-start" scope="col">Tahun terbit</th>
					<th scope="col">Pengarang</th>
					<th scope="col">Penerbit</th>
				</tr>
			</thead>

			<!-- Table body -->
			<tbody class="table-group-divider">
				<?php $i = 1 ?>
				<?php foreach ($books as $book): ?>
					<tr class="align-middle">
						<th class="text-start" scope="row"><?= $i++ ?></th>
						<td><?= html_escape($book['id']) ?></td>
						<td><?= html_escape($book['title']) ?></td>
						<td class="text-start"><?= html_escape($book['publication_year']) ?></td>
						<td><?= html_escape($book['author']) ?></td>
						<td><?= html_escape($book['publisher']) ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</main>

<script>
	window.print();
</script>

<script>
	window.print();
</script>