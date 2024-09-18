<main class="flex-grow-1">
	<div class="container py-3 text-body-emphasis">
		<h4 class="mb-0 text-center">Laporan <?= $settings['application_name'] ?></h4>
		<h4 class="mb-3 text-center"><?= str_replace('Laporan ', '', $title) ?></h4>

		<table class="align-middle border-black mb-0 table table-bordered table-sm w-100">
			<!-- Table header -->
			<thead>
				<tr class="align-middle table-dark">
					<th class="text-start" scope="col">#</th>
					<th scope="col">Kode</th>
					<th scope="col">Nama</th>
					<th scope="col">Jenis Kelamin</th>
					<th scope="col">Email</th>
					<th class="text-start" scope="col">No. Telp</th>
					<th scope="col">Alamat</th>
				</tr>
			</thead>

			<!-- Table body -->
			<tbody class="table-group-divider">
				<?php $i = 1 ?>
				<?php foreach ($members as $member): ?>
					<tr class="align-middle">
						<th class="text-start" scope="row"><?= $i++ ?></th>
						<td><?= html_escape($member['id']) ?></td>
						<td><?= html_escape($member['fullname']) ?></td>
						<td><?= html_escape($member['gender']) ?></td>
						<td><?= html_escape($member['email']) ?></td>
						<td class="text-start"><?= html_escape($member['phone_number']) ?></td>
						<td><?= html_escape($member['address']) ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</main>

<script>
	window.print();
</script>