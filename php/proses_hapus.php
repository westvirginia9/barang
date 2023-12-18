<?php 

include 'koneksi.php';

$kode_Barang = $_GET['kode_barang'] ;

$sqlHapus = "DELETE FROM barang  WHERE kode_barang = '$kode_Barang' ";
$hapusBarang = $conn->query($sqlHapus) ;

if ($hapusBarang) {
    function peringatan($pesan) {   
        echo "<script>alert('$pesan'); window.location='../halaman_admin.php';</script>"; 
    } 
    peringatan("Berhasil di hapus!");
} else {
    function peringatan($pesan) {   
        echo "<script>alert('$pesan'); window.location='../halaman_admin.php';</script>"; 
    } 
    peringatan("Gagal menghapus data!");
}

?>
