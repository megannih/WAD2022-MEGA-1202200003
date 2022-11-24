<?php
$connector = new mysqli("localhost:3308", "root", "", "modul3");

if (!$connector) {
  die("Koneksi Gagal: " . $connector->connect_error);
}