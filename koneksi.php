<?php

$host = "localhost";
$name = "root";
$pass = "";
$db = "db_data_sekolah";

$koneksi = mysqli_connect($host, $name, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal");
}

$nama = "";
$nis_nip = "";
$kelas = "";
$jenis_kelamin = "";
$jurusan = "";
$sebagai = "";
$sukses = "";
$error = "";
