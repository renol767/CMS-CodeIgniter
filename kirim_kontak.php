<?php
$koneksi = mysqli_connect("localhost","root","","bjupost");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

// menangkap data yang dikirim dari form login
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$pesan = $_POST['pesan'];


// menginput data dari register ke database
mysqli_query($koneksi,"insert into contactus (id,nama,email,nohp,pesan) values ('$id','$nama','$email','$nohp','$pesan')");
header("location:kontak.php");
?>
