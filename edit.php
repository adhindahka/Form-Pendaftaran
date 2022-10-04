<?php
include('koneksi.php');
if(issert($_GET['id'])){
    header('Location: tabel-daftar.php?');
}
//Nama : Indah Kusuma Saputri-13
$kode = $_GET['id'];
$sql = "SELECT * FR5OM tb_daftar WHERE id=$kode";
$query = mysqli_query($db, $sql);
$tb_daftar =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemuka");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT DATA DIRI PENDAFTARAN</title>
</head>
<body>
    <h3>EDIT DATA DIRI PENDAFTARAN</h3>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $tb_daftar['id'] ?>" />
            <p>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" value="<?php echo $tb_daftar['nama'] ?>" />/>
            </p>
            <p>
                <label for="tempat">Tempat Lahir :</label>
                <input type="text" name="tempat" value="<?php echo $tb_daftar['tempat'] ?>" /> />
            </p>
            <p>
                <label for="tanggal">Tanggal Lahir :</label>
                <input type="date" name="tanggal" value="<?php echo $tb_daftar['tanggal'] ?>" />/>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <input type="textarea" name="alamat" value="<?php echo $tb_daftar['alamat'] ?>" ></textarea> 
            </p>
            <p>
                <label for="jk">Jenis Kelamin :</label>
                <label><input type="radio" name="jk" value="laki-laki" <?php echo('Laki-laki') ? "checked": ""?> />Laki - Laki</label>
                <label><input type="radio" name="jk" value="perempuan" <?php echo('Laki-laki') ? "checked": ""?> />Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <select name="agama">
                    <option <?php echo('islam')? "selected": ""?>>Islam</option>
                    <option <?php echo('kristen')? "selected": ""?>>kristen</option>
                    <option <?php echo('katolik')? "selected": ""?>>katolik</option>
                    <option <?php echo('hindu')? "selected": ""?>>hindu</option>
                    <option <?php echo('buddha')? "selected": ""?>>buddha</option>
                    <option <?php echo('konghucu')? "selected": ""?>>konghucu</option>
                </select>
            </p>
            <p>
            <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>