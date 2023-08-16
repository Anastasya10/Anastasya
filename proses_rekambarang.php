<?php
include '../config/koneksi.php';
session_start();
$namabarang = $_POST['txtNamaBarang'];
$stok = $_POST['txtStok'];
$hargabeli = $_POST['txtHargaBeli'];
$hargajual = $_POST['txtHargaJual'];
    mysqli_query($koneksi,"insert into tbl_barang(nama_barang,stok,harga_beli,harga_jual) 
    values('$namabarang','$stok','$hargabeli','$hargajual')");
    echo '<script>alert("Data berhasil direkam");
            document.location="menu.php?module=view_barang";</script>'; 
?>