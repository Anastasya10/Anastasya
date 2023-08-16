<?php
    include '../config/koneksi.php';
    $idbarang=$_GET['id_barang'];
    mysqli_query($koneksi,"DELETE FROM tbl_barang WHERE id_barang='$idbarang'");
    echo '<script>alert("Data berhasil dihapus");
         document.location="menu.php?module=view_barang";</script>'; 
?>