
<h2><?= $title;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('penyewaan/create'); ?>
<div class="form-group">
	<label>Nama Kontraktor</label>
	<input type="text" class="form-control" name="nama_k" placeholder="Nama Kontraktor">

	<label>Tanggal Sewa</label>
	<input type="date" class="form-control" name="tglsewa" placeholder="Tanggal Sewa">

	<label>Tanggal Kembali</label>
	<input type="date" class="form-control" name="tglbalik" placeholder="Tanggal Kembali">

	<label>Jenis Material</label>
	<input type="text" class="form-control" name="jenismaterial" placeholder="Jenis Material">
</div>
<button type="submit" class="btn btn-info">Submit</button>
</form>
