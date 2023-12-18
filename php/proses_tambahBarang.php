<?php 

include 'koneksi.php';

$kodeBarang = $_POST['kode_barang'] ;
$namaBarang = $_POST['nama_barang'] ;
$stok = $_POST['stok'] ;
$harga = $_POST['harga'] ;
$jenis = $_POST['jenis'] ;

$sql = "INSERT INTO barang(kode_barang, nama_barang, stok, harga, jenis) VALUES ('$kodeBarang', '$namaBarang',  '$stok' , '$harga' ,  '$jenis')  ";
$tambahBarang = $conn->query($sql) ;

if($tambahBarang) {
    function peringatan($pesan) {   
        echo "<script>alert('$pesan'); window.location='../halaman_admin.php';</script>"; 
    } 
    peringatan("Berhasil ditambahkan!");
} else {
    function peringatan($pesan) {   
        echo "<script>alert('$pesan'); window.location='../tambah_data.php';</script>"; 
    } 
    peringatan("Data gagal ditambahkan!");
}

?>