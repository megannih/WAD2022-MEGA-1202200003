<?php
require("../config/connector.php");
session_start();
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordKonfirmasi = $_POST['konfirmasi_password'];
$no_hp = $_POST['no_hp'];
if(isset($_POST['nav'])) {
    // $_COOKIE['nav'] = $_POST['nav'];
    setcookie("nav", $_POST['nav'], time() + (86400 * 300), "/"); // 86400 = 1 day
}
// var_dump($_COOKIE['nav']); die;
if(isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $_SESSION['nama'] = $nama;
    $_SESSION['no_hp'] = $no_hp;
    if($password) {
        if($password == $passwordKonfirmasi) {
            $passwordHash = md5($password);
            $sql = "UPDATE users_mega SET nama='$nama', password='$passwordHash', no_hp='$no_hp' WHERE id='$id'";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['success'] = "Berhasil update profil";
                header("Location: ../profil.php", true, 301);
                exit();
            } else {
                $_SESSION['error'] = "Terjadi kesalahan, coba lagi";
                header("Location: ../profil.php", true, 301);
                exit();
            }
            $conn->close();
        }
    } else {

        $sql = "UPDATE users_mega SET nama='$nama', no_hp='$no_hp' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "Berhasil update profil";
            header("Location: ../profil.php", true, 301);
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
            // $_SESSION['error'] = "Terjadi kesalahan, coba lagi";
            // header("Location: ../profil.php", true, 301);
            // exit();
        }
            $conn->close();
    }
}