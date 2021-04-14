<ul class="list-group">
	<h3 style="text-align: center">LAPORAN PENYEWAAN PT BANDA JAYA UTAMA</h3>
	<table class="Table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Kontraktor</th>
			<th>Tanggal Sewa</th>
			<th>Tanggal Kembali</th>
			<th>Jenis Material</th>
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
			</tr>
		<?php endforeach; ?>
	</table>
</ul>
