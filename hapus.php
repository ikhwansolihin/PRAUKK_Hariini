<?php
//------------koneksi---------------------//
include("koneksi.php");
//---------------------------------------//
$id = $_GET['id'];
//--------query------------------------//
$sql= "DELETE FROM tb_dvd where id_dvd=$id";
$query = mysqli_query($db, $sql);
//---------------------------------------------------//
$sql= "DELETE FROM tb_penyewa where id_penyewa=$id";
$query = mysqli_query($db, $sql);
//-------------------------------------------------//
if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>