<?php
session_start();

if(!($_SESSION['login'] )){
  header('location:index.html') ;
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Halaman Admin</h1>
            <p>Selamat datang, <b><?php  echo  $_SESSION['nama_lengkap'] ?> !</b> </p>
        </div>
        <div class="input-group ">
            <a href="halaman_admin.php" class="btn btn-warning">Home</a>
            <a href="tambah_data.php" class="btn btn-primary">Tambah Data</a>
            <a href="php/logout.php" class="btn btn-danger">Logout</a>
        </div>

        <h4>Admin bisa melakukan:edit,hapus, dan tambah data barang</h4>
        <?php include('tampil_barang.php') ?>


    </div>
</body>
</html>
