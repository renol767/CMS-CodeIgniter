<div class="container-fluid">
	<h2><?= $title; ?></h2>
	<?php foreach ($penyewaan as $row ) : ?>
		<form action="<?php echo base_url(). 'penyewaan/update'; ?>" method="post">

	<div class="form-group">
		<h6>Nama Kontraktor</h6>
		<input type="hidden" name="id" value="<?php echo $row->id ?>">
		<input type="text" class="form-control" name="nama_k" placeholder="Nama Kontraktor" value="<?php echo $row->nama_k ?>">

		<h6>Tanggal Sewa</h6>
		<input type="date" class="form-control" name="tglsewa" placeholder="Tanggal Sewa" value="<?php echo $row->tglsewa ?>">

		<h6>Tanggal Kembali</h6>
		<input type="date" class="form-control" name="tglbalik" placeholder="Tanggal Kembali" value="<?php echo $row->tglbalik ?>">

		<h6>Jenis Material</h6>
		<input type="text" class="form-control" name="jenismaterial" placeholder="Jenis Material" value="<?php echo $row->jenismaterial ?>">
	</div>
	<button type="submit" class="btn btn-info">Submit</button>
	</form>
	<?php endforeach; ?>
