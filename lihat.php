<?php
session_start();
include "koneksi.php";
include "tambah.php";
$sql = "SELECT * FROM data_sekolah";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lihat Data</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <header class="text-center p-3 bg-success">
    <h3 class="mb-3">WEBSITE DATA SEKOLAH</h3>
    <nav class="mt-3">
      <a href="index.php" class="text-dark">Tambah Data</a>
      <a href="lihat.php" class="text-dark">Lihat Data</a>
    </nav>
  </header>

  <h3 class="mt-4 mb-3 text-center">WEBSITE DATA SEKOLAH</h3>
  <div class="card mx-auto mt-2">

    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIS/NIP</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Sebagai</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql2 = "SELECT * FROM data_sekolah ORDER BY id DESC";
          $q2 = mysqli_query($koneksi, $sql2);
          $urut = 1;
          while ($r2 = mysqli_fetch_array($q2)) {
            $id = $r2['id'];
            $nama = $r2['nama'];
            $nis_nip = $r2['nis_nip'];
            $kelas = $r2['kelas'];
            $jenis_kelamin = $r2['jenis_kelamin'];
            $jurusan = $r2['jurusan'];
            $sebagai = $r2['sebagai'];
          ?>
            <tr>
              <th scope="row"><?php echo $urut++ ?></th>
              <td scope="row"><?php echo $nama ?></td>
              <td scope="row"><?php echo $nis_nip ?></td>
              <td scope="row"><?php echo $kelas ?></td>
              <td scope="row"><?php echo $jenis_kelamin ?></td>
              <td scope="row"><?php echo $jurusan ?></td>
              <td scope="row"><?php echo $sebagai ?></td>
              <td scope="row">
                <a href="edit.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                <a href="delete.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>

      </table>
    </div>
  </div>

  <footer class="bg-success p-4 text-center mt-4">
  </footer>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/pooper.min.js"></script>
</body>

</html>