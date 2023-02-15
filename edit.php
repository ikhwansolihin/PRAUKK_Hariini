<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_penyewa INNER JOIN
   tb_dvd WHERE tb_penyewa.id_penyewa='$id'";
   $query= mysqli_query($db, $sql);
   $ubah= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengedit</title>
</head>
<body>
<form action="proses_edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $ubah['id_penyewa']?>" />
            <p>
                <label for="nama_penyewa">Nama Penyewa :</label>
                <input type="text" name="nama_penyewa"  value="<?php echo $ubah['nama_penyewa']?>" />
            </p>
            <p>
                <label for="alamat">Alamat :</label><br>
                <textarea name="alamat" id="" cols="30" rows="10" value="<?php echo $ubah['alamat']?>"></textarea>
            </p>
            <p>
                <label for="genre_film">Genre Film :</label>
                <input type="text" name="genre_film"  value="<?php echo $ubah['genre_film']?>" />
            </p>
            <p>
                <label for="judul_film">Judul Film :</label>
                <input type="text" name="judul_film"  value="<?php echo $ubah['judul_film']?>" />
            </p>
            <p>
                <label for="tahun_film">Tahun Film :</label>
                <input type="number" name="tahun_film"  value="<?php echo $ubah['tahun_film']?>" />
            </p>
            <p>
                <label for="tanggal_sewa">Tanggal Sewa :</label>
                <input type="date" name="tanggal_sewa"  value="<?php echo $ubah['tanggal_sewa']?>" />
            </p>
            <p>
                <label for="tanggal_kembali">Tanggal Kembali :</label>
                <input type="date" name="tanggal_kembali"  value="<?php echo $ubah['tanggal_kembali']?>" />
            </p>
            <p>
                <label for="harga">Harga :</label>
                <input type="number" name="harga"  value="<?php echo $ubah['harga']?>" />
            </p>
            <p>
                <input type="submit" value="edit" name="edit" />
            </p>
        </fieldset>
        <a href="tampil.php">Back</a>
</body>
</html>