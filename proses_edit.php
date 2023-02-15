<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $Nama_penyewa=$_POST['nama_penyewa'];
    $Alamat=$_POST['alamat'];
    $Genre_film=$_POST['genre_film'];
    $Judul_film=$_POST['judul_film'];
    $Tahun_film=$_POST['tahun_film'];
    $Tanggal_sewa=$_POST['tanggal_sewa'];
    $Tanggal_kembali=$_POST['tanggal_kembali'];
    $Harga=$_POST['harga'];

    $sql = "UPDATE tb_penyewa SET nama_penyewa='$Nama_penyewa', alamat='$Alamat' WHERE id_penyewa='$id'";
    $query= mysqli_query($db,$sql);

    $sql = "UPDATE tb_dvd SET genre_film='$Genre_film',judul_film='$Judul_film',tahun_film='$Tahun_film'
    ,tanggal_sewa='$Tanggal_sewa'
    ,tanggal_kembali='$Tanggal_kembali'
    ,harga='$Harga' WHERE id_dvd='$id'";
    $query= mysqli_query($db,$sql);

if($query){
    header('location:tampil.php');
}else{
    die ("gagal mengedit");
}}
?>