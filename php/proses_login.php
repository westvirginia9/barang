<?php

include 'koneksi.php';

$nama = $_POST['username'];
$pass = MD5($_POST['password']);

$sqlakun = "SELECT * FROM akun where username = '$nama'  AND password = '$pass' ";
$dataAkun = $conn->query($sqlakun)->fetch_assoc();

session_start() ;
$_SESSION['nama_lengkap'] = $dataAkun['nama_lengkap'] ;
$_SESSION['login'] = true ;

if($dataAkun){
    header('location:../halaman_admin.php') ;
} else {
    header('location:login.php') ;
}

?>

