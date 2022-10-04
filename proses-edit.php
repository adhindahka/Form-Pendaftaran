<?php
include("koneksi.php");

if(isset($_POST['simpan'])){;
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $JK = $_POST['jk'];
    $agama = $_POST['agama'];
 
$sql = "UPDATE tb_daftar SET nama='$nama', tempat='$tempat', tanggal='$tanggal', alamat='$alamat', jk='$jk', agama='$agama',   WHERE id=$kode";
$query= mysql_query($db,$sql);

if($query){
    header('Location:tabel-daftar.php';)
}else{
    die ("gagal menyimpan perubahan...");
}
}else{
    die("akses dilarang");
}
?>
<!--Nama: Indah Kusuma Saputri-13-->