<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];

include 'koneksi.php';

$pengguna = mysqli_query($connect, "select * from pengguna where Username='$Username' and Password='$Password'");
$check = mysqli_num_rows($pengguna);
if($check>0){
    session_start();
    $penggunaRow = mysqli_fetch_array($pengguna);
    $_SESSION['Username'] = $penggunaRow['Username'];
    $_SESSION['Password'] = $penggunaRow['Password'];
    header("Location:index.php");
}else{
    header("location: login.php");
}
?>