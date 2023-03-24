<?php 
include 'header.php';?>
<div class="container" style="margin-top: 50px;">
    <h4>Input Data Mahasiswa</h4>
    <Form action="simpan_mahasiswa.php" method="post">
        <table class="table table-bordered">
            <tr>
                <td>NIM</td>
                <td><input name="NIM" type="text" placeholder="NIM" class="form-control"></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><input name="Nama" type="text" placeholder="Nama_Lengkap" class="form-control"></td>
          </tr>
            <tr>
              <td>Email</td>
              <td><input name="Email" type="text" placeholder="Email" class="form-control"></td>
          </tr>
          <tr>
              <td>Nomor_HP</td>
              <td><input name="Nomor_HP"type="text" placeholder="Nomor_HP" class="form-control"></td>
          </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="id_jurusan" class="form-control">
                        <?php
                    $jurusan = mysqli_query($connect, "select * from jurusan");
                    while($jrs = mysqli_fetch_array($jurusan)){
                        echo "<option value='".$jrs['id_jurusan']."'>".$jrs['nama_jurusan']."</option>";
                    }
                    ?>
                </select>
                </td>
            </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>
                <input type="date" name="Tanggal_Lahir" placeholder="Tanggal Lahir" class="form-control">
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
                    <select name="sudah_lulus" class="form-control">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                  <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
        </form>
</div>
<?php
include 'footer.php';
?>
