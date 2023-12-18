<?php

include 'php/koneksi.php';

session_start();

if(!($_SESSION['login'] )){
  header('location:index.html') ;
}

$sqlJenis = "SELECT * FROM jenis_barang";
$dataJenis = $conn->query($sqlJenis);

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
    <title>Halaman Tambah Data</title>
</head>
<body>
    <div class="container">
      <div class="jumbotron">
        <h1>Formulir tambah barang</h1>
        <p>silahkan admin <b><?php  echo  $_SESSION['nama_lengkap'] ?></b> menambahkan barang </p>
      </div>
      <?php include('tampil_barang.php') ?> 
      <form action="php/proses_tambahBarang.php" method="POST">
          <div class="form-group">
            <label>kode barang</label>
            <input type="text" class="form-control" name="kode_barang">
          </div>
          <div class="form-group">
            <label>nama barang</label>
            <input type="text" class="form-control" name="nama_barang">
          </div>
          <div class="form-group">
            <label>stok</label>
            <input type="int" class="form-control" name="stok">
          </div>
          <div class="form-group">
            <label>harga</label>
            <input type="int" class="form-control" name="harga">
          </div>
          <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-control" name="jenis" id="jenis">
             <option disabled>Pilih</option>
              <?php while($data = $dataJenis->fetch_assoc()) { ?>
                <option value="<?php echo $data['kode'] ?>"><?php echo $data['jenis']  ;?></option>
              <?php } ?>
            </select>
          </div>
          <button type="submit" class="mt-3 btn btn-primary">Tambah Barang</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>