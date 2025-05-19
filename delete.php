<?php
include "koneksi.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM data_sekolah WHERE id = ?";
  $stmt = $koneksi->prepare($sql);
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    header("Location: lihat.php");
    exit;
  } else {
    echo "Terjadi kesalahan saat menghapus data.";
  }
} else {
  echo "ID tidak ditemukan.";
}
mysqli_close($koneksi);
