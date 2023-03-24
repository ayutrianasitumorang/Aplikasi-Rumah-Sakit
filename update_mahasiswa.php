<?php
$NIM            = $_POST['NIM'];
$Nama           = $_POST['Nama'];
$Email          = $_POST['Email'];
$Nomor_HP       = $_POST['Nomor_HP'];
$id_jurusan        = $_POST['id_urusan'];
$Tanggal_Lahir  = $_POST['Tanggal_Lahir'];
$Jenis_Kelamin  = $_POST['Jenis_Kelamin'];
$Sudah_Lulus    = $_post['Sudah_Lulus'];

include ('koneksi.php');
$query = "UPDATE mahasiswa20 SET Nama='$Nama',Email='$Email',Nomor_HP='$Nomor_HP',
id_urusan='$id_jurusan',Tanggal_Lahir='$Tanggal_Lahir',Jenis_Kelamin='$Jenis_Kelamin',Sudah_Lulus='$Sudah_Lulus' WHERE NIM='$NIM'";

$update = mysqli_query($connect,$query);

if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status)
?>