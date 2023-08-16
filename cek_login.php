<?php
include 'config/koneksi.php';
session_start();

$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];

if (isset($username) && isset($password)) {
    $sql=mysqli_query($koneksi,"SELECT * FROM tbl_login WHERE username='$username' and password=md5('$password')");
    $cek = mysqli_num_rows($sql);
    if($cek > 0) {
        $_SESSION['username'] = $username;
        header("location:pages/menu.php?module=dashboard");
    }else{
        echo '<script>alert("username dan password tidak dikenali");
        document.location="index.php";</script>';
    }
}
?>