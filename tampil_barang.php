<!-- Muhammad Yogi Wijanarko | 22523202 -->
<?php 

include 'php/koneksi.php';

$sqlDataBarang = "SELECT * FROM barang";
$dataBarang = $conn->query($sqlDataBarang);
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

<h1>DAFTAR BARANG</h1>
<table class="table table-bordered border-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">KODE</th>
      <th scope="col">NAMA BARANG</th>
      <th scope="col">STOCK</th>
      <th scope="col">HARGA</th>
      <th scope="col">JENIS</th>
      <th scope="col">EDIT</th>
      <th scope="col">HAPUS</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1 ; ?>
    <?php while($data = $dataBarang->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['kode_barang'] ; ?></td>
      <td><?php echo $data['nama_barang'] ; ?></td>
      <td><?php echo $data['stok'] ; ?></td>
      <td><?php echo $data['harga'] ; ?></td>
      <td><?php echo $data['jenis'] ; ?></td>
      <td><a class="text-primary" href="edit_barang.php?kode_barang=<?php echo $data['kode_barang'] ?>">Edit</a></td>
      <td><a class="text-primary" href="php/proses_hapus.php?kode_barang=<?php echo $data['kode_barang'] ?>">hapus</a></td>
    </tr>
    <?php } ?>

  </tbody>
</table>

</body>
</html>
