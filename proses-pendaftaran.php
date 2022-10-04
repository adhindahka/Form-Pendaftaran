<?php
include("koneksi.php");

if(isset($_POST['daftar'])){;
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $JK = $_POST['jk'];
    $agama = $_POST['agama'];
 
$sql = "INSERT INTO tb_daftar (nama, tempat, tanggal, alamat, jk, agama) VALUES ('$nama', '$tempat','$tanggal', '$alamat', '$jk', '$agama')"; 
$query= mysql_query($db);

if($query){
    header('Location:tabel-daftar.php?status=sukses');
}else{
    header('Location:pendaftaran.php?status=gagal');
}
}
?>
<!--Nama: Indah Kusuma Saputri-13-->