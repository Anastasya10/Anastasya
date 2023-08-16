<?php
include '../config/koneksi.php';
session_start();
$idbarang = $_POST['txtIDBarang'];
$namabarang = $_POST['txtNamaBarang'];
$stok = $_POST['txtStok'];
$hargabeli = $_POST['txtHargaBeli'];
$hargajual = $_POST['txtHargaJual'];
    mysqli_query($koneksi,"UPDATE tbl_barang SET nama_barang='$namabarang',stok='$stok',harga_beli='$hargabeli',harga_jual='$hargajual'where id_barang='$idbarang'");
    echo '<script>alert("Data berhasil diupdate");
            document.location="menu.php?module=view_barang";</script>'; 
?>