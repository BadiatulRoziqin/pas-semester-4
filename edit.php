<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM data_sekolah WHERE id='$id'";
  $result = mysqli_query($koneksi, $query);
  $data = mysqli_fetch_assoc($result);
} else {
  echo "ID tidak ditemukan.";
  exit;
}
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $nis_nip = $_POST['nis_nip'];
  $kelas = $_POST['kelas'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $jurusan = $_POST['jurusan'];
  $sebagai = $_POST['sebagai'];

  $query = "UPDATE data_sekolah SET nama='$nama', nis_nip='$nis_nip', kelas='$kelas', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', sebagai='$sebagai' WHERE id='$id'";
  if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil diperbarui.";
    header("Location: lihat.php");
    exit();
  } else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Data Sekolah</title>
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
  <main class=" mt-4 mx-auto">
    <h3 class="text-center">Edit Data Siswa/Guru</h3>
    <form action="" method="POST" class="mt-4 p-3">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="nama" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
      </div>
      <div class="mb-3">
        <label for="nis_nip" class="form-label">NIS/NIP</label>
        <input type="nama" class="form-control" id="nis_nip" name="nis_nip" value="<?php echo $data['nis_nip'] ?>">
      </div>
      <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <select class="form-control" name="kelas" id="kelas">
          <option value="">Pilih Kelas</option>
          <option value="X" <?php if ($data['kelas'] == "X") echo "selected" ?>>X</option>
          <option value="XI" <?php if ($data['kelas'] == "XI") echo "selected" ?>>XI</option>
          <option value="XII" <?php if ($data['kelas'] == "XII") echo "selected" ?>>XII</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin" id="jenis-kelamin">
          <option value="">Pilih Jenis Kelamin</option>
          <option value="Laki-laki" <?php if ($data['jenis_kelamin'] == "Laki-laki") echo "selected" ?>>Laki-laki</option>
          <option value="Perempuan" <?php if ($data['jenis_kelamin'] == "Perempuan") echo "selected" ?>>Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <select class="form-control" name="jurusan" id="jurusan">
          <option value="">Pilih Jurusan</option>
          <option value="RPL" <?php if ($data['jurusan'] == "RPL") echo "selected" ?>>RPL</option>
          <option value="TKJ" <?php if ($data['jurusan'] == "TKJ") echo "selected" ?>>TKJ</option>
          <option value="TAV" <?php if ($data['jurusan'] == "TAV") echo "selected" ?>>TAV</option>
          <option value="TP" <?php if ($data['jurusan'] == "TP") echo "selected" ?>>TP</option>
          <option value="TSM" <?php if ($data['jurusan'] == "TSM") echo "selected" ?>>TSM</option>
          <option value="TKR" <?php if ($data['jurusan'] == "TSM") echo "selected" ?>>TSM</option>
          <option value="DPIB" <?php if ($data['jurusan'] == "DPIB") echo "selected" ?>>DPIB</option>
          <option value="TITL" <?php if ($data['jurusan'] == "TITL") echo "selected" ?>>TITL</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="sebagai" class="form-label">Sebagai</label>
        <select class="form-control" name="sebagai" id="sebagai">
          <option value="">Pilih Sebagai</option>
          <option value="Siswa" <?php if ($data['sebagai'] == "siswa") echo "selected" ?>>Siswa</option>
          <option value="Guru" <?php if ($data['sebagai'] == "guru") echo "selected" ?>>Guru</option>
        </select>
      </div>
      <div class="col-12 text-center">
        <input type="submit" name="simpan" value="Edit Data" class="btn btn-primary fw-semibold" />
      </div>
    </form>
  </main>
  <footer class="bg-success p-4 text-center mt-4">
  </footer>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/pooper.min.js"></script>
</body>

</html>