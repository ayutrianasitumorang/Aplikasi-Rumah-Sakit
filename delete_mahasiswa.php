<?php
$NIM = $_GET['NIM'];
include('koneksi.php');
$delete = mysqli_query($connect,"delete from mahasiswa20 where NIM='$NIM'");
if($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);
?>