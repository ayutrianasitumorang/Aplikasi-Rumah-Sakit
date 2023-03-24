<?php
include 'header.php';
?>

      <div class="container-fluid" style="margin-top: 50px;">
        <h4>Data Mahasiswa</h4>
        <a href="tambah_mahasiswa.php" class="btn btn-info">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Jurusan</th>
                <th>Jenis_Kelamin</th>
                <th>Tanggal_Lahir</th>
                <th>Sudah_Lulus</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $nomor = 1;
            $mahasiswa20 = mysqli_query($connect, "select * from mahasiswa20");
            while($row = mysqli_fetch_array($mahasiswa20)){
            ?>
            <tr>
                <th><?php echo $nomor;?></td>
                <td><?php echo $row['NIM']?></td>
                <td><?php echo $row['Nama']?></td>
                <td><?php echo $row['Email']?></td>
                <td><?php echo $row['Nomor_HP']?></td>
                <td><?php echo $row['Jurusan']?></td>
                <td><?php echo $row['Jenis_Kelamin']?></td>
                <td><?php echo $row['Tanggal_Lahir']?></td>
                <td><?php echo $row['Sudah_Lulus']?></td>
                <td>
                    <a href="edit_data_mahasiswa.php?NIM=<?php echo $row['NIM'];?>" class="btn btn-danger">Edit</a>
                    <a href="delete_mahasiswa.php?NIM=<?php echo $row['NIM'];?>" class="btn btn-warning">Delete</a>
                </td>
            </tr>
            <?php
        $nomor++;
            }
            ?>
            </tbody>
        </table>

        </div>
        <?php
include'footer.php';
?>

   
