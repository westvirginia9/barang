<?php 

include 'koneksi.php';


$kodeBarang = $_POST['kode_barang'] ;
$namaBarang = $_POST['nama_barang'] ;
$stok = $_POST['stok'] ;
$harga = $_POST['harga'] ;
$jenis = $_POST['jenis'] ;


$sqlEdit = "UPDATE barang SET nama_barang = '$namaBarang' , stok = '$stok' , harga = '$harga', jenis = '$jenis'  WHERE kode_barang = '$kodeBarang' ";
$editBarang = $conn->query($sqlEdit) ;

if ($editBarang) {
    function peringatan($pesan) {   
        echo "<script>alert('$pesan'); window.location='../halaman_admin.php';</script>"; 
    } 
    peringatan("Berhasil di edit!");
} else {
    function peringatan($pesan) {   
        echo "<script>alert('$pesan'); window.location='../edit_barang.php';</script>"; 
    } 
    peringatan("Data gagal diupdate!");
}

?>
