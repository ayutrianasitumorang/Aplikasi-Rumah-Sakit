<?php
$id             = $_POST['id'];
$Nama           = $_POST['Nama'];
$Username       = $_POST['Username'];
$Password       = md5($_POST['Password']);

include ('koneksi.php');
$query = "UPDATE pengguna SET Nama='$Nama',Username='$Username',Password='$Password' WHERE id='$id'";

$update = mysqli_query($connect,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:list_pengguna.php?status=".$status)
?>