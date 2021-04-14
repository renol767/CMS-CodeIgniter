
<h2><?= $title; ?></h2>
<br><br>
<ul class="list-group">
	<table class="Table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>No HP</th>
			<th>Pesan</th>
			<th>Hapus</th>
		</tr>
		<?php
		$i = 1;
		foreach ($contactus as $row) : ?>
			<tr>
				<td><?php echo $i++?></td>
				<td><?php echo $row ['nama']; ?></td>
				<td><?php echo $row ['email']; ?></td>
				<td><?php echo $row ['nohp']; ?></td>
				<td><?php echo $row ['pesan']; ?></td>
				<td><a href="<?php echo base_url('contactus/delete/'.$row['id']); ?>" class="btn btn-danger">Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</ul>
