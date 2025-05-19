<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama = $_POST['nama'];
  $nis_nip = $_POST['nis_nip'];
  $kelas = $_POST['kelas'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $jurusan = $_POST['jurusan'];
  $sebagai = $_POST['sebagai'];

  $query_check = "SELECT * FROM data_sekolah WHERE nis_nip='$nis_nip'";
  $result_check = mysqli_query($koneksi, $query_check);
  if (mysqli_num_rows($result_check) > 0) {
    echo "<script>alert('NIS/NIP sudah terdaftar!'); window.location.href='index.php';</script>";
  } else {
    $query_insert = "INSERT INTO data_sekolah (nama, nis_nip, kelas, jenis_kelamin, jurusan, sebagai) VALUES ('$nama', '$nis_nip', '$kelas', '$jenis_kelamin', '$jurusan', '$sebagai')";
    if (mysqli_query($koneksi, $query_insert)) {
      echo "<script>alert('Data siswa berhasil ditambahkan'); window.location.href='lihat.php';</script>";
    } else {
      echo "<script>alert('Gagal menambahkan data siswa!'); window.location.href='index.php';</script>";
    }
  }
  $koneksi->close();
}
