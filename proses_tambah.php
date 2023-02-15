<?php
include("koneksi.php");
if(isset($_POST['kirim'])){
    $id=$_POST['id'];
    $Nama_penyewa=$_POST['nama_penyewa'];
    $Alamat=$_POST['alamat'];
    $Genre_film=$_POST['genre_film'];
    $Judul_film=$_POST['judul_film'];
    $Tahun_film=$_POST['tahun_film'];
    $Tanggal_sewa=$_POST['tanggal_sewa'];
    $Tanggal_kembali=$_POST['tanggal_kembali'];
    $Harga=$_POST['harga'];

    $sql="INSERT INTO tb_dvd(genre_film,judul_film,tahun_film,tanggal_sewa,tanggal_kembali,harga) 
    VALUES ('$Genre_film','$Judul_film','$Tahun_film','$Tanggal_sewa','$Tanggal_kembali','$Harga' )";
    $query=mysqli_query($db, $sql);

    $sql="SELECT max(id_dvd) AS dvd_id FROM tb_dvd LIMIT 1";
    $query=mysqli_query($db, $sql);

    $data = mysqli_fetch_array($query);
    $das = $data ['dvd_id'];

    $sql="INSERT INTO tb_penyewa(nama_penyewa,alamat,id_dvd)
     VALUES ('$Nama_penyewa','$Alamat','$das' )";
    $query=mysqli_query($db, $sql);

    
    if($query){
                    header('location:tampil.php?status:sukses');
                }else{
                    header('location:tampil.php?status:gagal'); 
                }
            }
            ?>
}
?>