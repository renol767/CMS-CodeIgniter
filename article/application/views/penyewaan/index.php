
<h2><?= $title; ?></h2>
<a type="button" href="<?php echo base_url(); ?>penyewaan/create" class="btn btn-success btn-sm" role="button">Tambah Data</a>
<a type="button" href="<?php echo base_url(); ?>penyewaan/export" class="btn btn-primary btn-sm" role="button">Export PDF</a>
<br><br>
<ul class="list-group">
	<table class="Table table-bordered">
				<tr>
					<th>No</th>
					<th>Nama Kontraktor</th>
					<th>Tanggal Sewa</th>
					<th>Tanggal Kembali</th>
					<th>Jenis Material</th>
					<th>Edit</th>
					<th>Hapus</th>
				</tr>
			<?php
			$i = 1;
			foreach ($penyewaan as $row) : ?>
				<tr>
					<td><?php echo $i++?></td>
					<td><?php echo $row ['nama_k']; ?></td>
					<td><?php echo $row ['tglsewa']; ?></td>
					<td><?php echo $row ['tglbalik']; ?></td>
					<td><?php echo $row ['jenismaterial']; ?></td>
					<td><a href="<?php echo base_url('penyewaan/edit/'.$row['id']); ?>" class="btn btn-warning">Edit</a></td>
					<td><a href="<?php echo base_url('penyewaan/delete/'.$row['id']); ?>" class="btn btn-danger">Delete</a></td>
				</tr>
			<?php endforeach; ?>
		</table>
</ul>
