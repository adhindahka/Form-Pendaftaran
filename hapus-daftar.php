<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql= "DELETE FROM daftar where id=$kode";
$query = mysqli_query($db, $sql);
if($squery){
    header("Location: tabel-daftar.php?status=sukses");
}else{
    die("akses dilarang");
}
?>
<!--Nama: Indah Kusuma Saputri-13-->