<?php
include 'connector.php';
$id = $_GET["id_mobil"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM showroom_mega_table WHERE id_mobil='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($connector).
       " - ".mysqli_error($connector));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../ListCar-Mega.php';</script>";
    }