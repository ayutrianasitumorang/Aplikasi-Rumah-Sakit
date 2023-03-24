<?php
$NIM            = $_POST['NIM'];
$Nama           = $_POST['Nama'];
$Email          = $_POST['Email'];
$Nomor_HP       = $_POST['Nomor_HP'];
$id_jurusan        = $_POST['id_jurusan'];
$Tanggal_Lahir  = $_POST['Tanggal_Lahir'];
$Jenis_Kelamin  = $_POST['Jenis_Kelamin'];
$Sudah_Lulus    = $_post['Sudah_Lulus'];

include ('koneksi.php');
$query = "INSERT INTO mahasiswa20 (NIM,Nama,Email,Nomor_HP,id_jurusan,Tanggal_Lahir,Jenis_Kelamin,Sudah_Lulus)
VALUES('$NIM','$Nama','$Email','$Nomor_HP','$id_jurusan','$Tanggal_Lahir','$Jenis_Kelamin','$Sudah_Lulus')";
$insert = mysqli_query($connect,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);
?>

