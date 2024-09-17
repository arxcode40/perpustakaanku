<main class="flex-grow-1">
	<div class="container py-3 text-body-emphasis">
		<h4 class="mb-0 text-center">Laporan <?= $settings['application_name'] ?></h4>
		<h4 class="mb-3 text-center"><?= str_replace('Laporan ', '', $title) ?></h4>

		<table class="align-middle border-black mb-0 table table-bordered table-sm w-100">
			<!-- Table header -->
			<thead>
				<tr class="align-middle table-dark">
					<th class="text-start" scope="col">#</th>
					<th class="text-start" scope="col">Kode</th>
					<th scope="col">Nama</th>
					<th scope="col">Judul</th>
					<th scope="col">Tanggal pengembalian</th>
					<th scope="col">Denda</th>
				</tr>
			</thead>

			<!-- Table body -->
			<tbody class="table-group-divider">
				<?php $i = 1 ?>
				<?php foreach($returns as $return): ?>
					<tr class="align-middle">
						<th class="text-start" scope="row"><?= $i++ ?></th>
						<td class="text-start"><?= html_escape($return['id']) ?></td>
						<td><?= html_escape($return['fullname']) ?></td>
						<td><?= html_escape($return['title']) ?></td>
						<td><?= html_escape(nice_date($return['checkout_date'], 'd M Y')) ?></td>
						<td>Rp<?= html_escape(number_format($return['fine'], 0, ',', '.')) ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</main>

<script>
	window.print();
</script>