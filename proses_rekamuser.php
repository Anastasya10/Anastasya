<?php
include '../config/koneksi.php';
session_start();
$user = $_POST['txtUser'];
$pass = $_POST['txtPass'];
$ulangipass = $_POST['txtUlangiPass'];
if($pass <> $ulangipass)
{
    echo '<script>alert("Password dan Ulangi password TIDAK SAMA");
            document.location="menu.php?module=manajemenuser";</script>'; 
}else{
    mysqli_query($koneksi,"insert into tbl_login(username,password) values('$user',md5('$pass'))");
    echo '<script>alert("Data User berhasil dibuat");
            document.location="menu.php?module=dashboard";</script>'; 
}

?>