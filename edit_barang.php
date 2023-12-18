<?php 

include 'php/koneksi.php';

session_start();

if(!($_SESSION['login'] )){
  header('location:index.html') ;
}
$kodeBarang = $_GET['kode_barang'] ;

$sqlBarang = "SELECT * FROM barang where kode_barang = '$kodeBarang' ";
$dataBarang = $conn->query($sqlBarang)->fetch_assoc();

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<main class="container">
    <h1>Edit Barang</h1>
    <div>
        <form action="php/proses_edit.php" method="POST" style="border: 1px solid black; padding:10px; width:250px;">
            <input type="text" name="kode_barang" value="<?php echo $dataBarang['kode_barang'] ; ?>"> <br><br>
            <input type="text" name="nama_barang" value="<?php echo $dataBarang['nama_barang']  ;?>"> <br><br>
            <input type="number" name="stok" value="<?php echo $dataBarang['stok'] ?>"> <br><br>
            <input type="number" name="harga" value="<?php echo $dataBarang['harga'] ?>"> <br><br>
            <input type="text" name="jenis" value="<?php echo $dataBarang['jenis'] ?>"> <br><br>
            <input type="submit" value="Update">
        </form>
    </div>
</main>
</body>
</html>
