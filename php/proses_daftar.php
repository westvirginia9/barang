<!-- Muhammad Yogi Wijanarko | 22523202 -->
<<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = MD5($_POST['password']);
$conf_password = MD5($_POST['conf_password']);
$nama_lengkap = $_POST['nama_lengkap'] ;
$alamat = $_POST['alamat'] ;



if($password != $conf_password) {
    function peringatan($pesan) {   
        echo "<script>alert('$pesan'); window.location='../daftar.html';</script>"; 
    } 
    peringatan("Password tidak cocok!"); 
} else {
  $sqldaftar = "INSERT INTO akun(username, password, nama_lengkap, alamat) VALUES ( '$username',  '$password' , '$nama_lengkap' , '$alamat' )  ";
  $registerAkun = $conn->query($sqldaftar) ;
  header('location:../index.html') ;

}


?>

