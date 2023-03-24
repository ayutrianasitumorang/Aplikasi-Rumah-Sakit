<?php include 'header.php';

$NIM = $_GET['NIM'];
$query = mysqli_query($connect, "select *from mahasiswa20 where NIM= '$NIM'");
$mahasiswa = mysqli_fetch_array ($query);

?>
<div class="container" style="margin-top: 50px;">
    <h4>Update Data Mahasiswa</h4>
    <Form action="update_mahasiswa.php" method="post">
    <table class="table table-bordered">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="NIM" value="<?php echo $mahasiswa['NIM'] ?>" Placeholder="NIM" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value="<?php echo $mahasiswa['Nama'] ?>" Placeholder="Nama Lengkap" class="form-control"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><input type="text" name="Email" value="<?php echo $mahasiswa['Email'] ?>" Placeholder="Email" class="form-control"></td>
          </tr>
          <tr>
              <td>Nomor_HP</td>
              <td><input type="text" name="Nomor_HP" value="<?php echo $mahasiswa['Nomor_HP'] ?>" Placeholder="Nomor HP" class="form-control"></td>
          </tr>          
            <tr>
                <td>id_jurusan</td>
                <select name="id_jurusan" class="form-control">
                <?php
                $jurusan = mysqli_query($connect,"select * from jurusan");
                while($jrs = mysqli_fetch_array($jurusan)){
                echo "<option value='".$jrs['id_jurusan']."' ";
                echo $jrs['id_jurusan']==$mahasiswa['id_jurusan']?"selected":"";
                echo ">".$jrs['nama_jurusan']."</option>";
                 }
                 ?>
                </select>
                </select></td>
            </tr>
            <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="Tanggal_Lahir" value="<?php echo $mahasiswa20['Tanggal_Lahir'] ?>" placeholder="Tanggal Lahir" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="Jenis_Kelamin" class="form-control">
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td>Sudah Lulus</td>
                <td>
                    <select name="Sudah_Lulus" class="form-control">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="index.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
</form>
</div>
<?php include 'footer.php';?>
