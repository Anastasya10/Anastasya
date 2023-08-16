<?php session_start(); ?>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="../assets/assets/bootstrap/css/bootstrap.min.css">
    <script src="../assets/assets/jquery/jquery-3.2.1.slim.min.js"> </script>
	<script src="../assets/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-between" style="background-color:#CDAA7D">
    <span class="navbar-text" style="color:white">
        <img src="../images/barang.png" width="40" height="40" alt=""> 
        <b>Aplikasi Pendataan Barang</b>
    </span>
    <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="color:white" href="menu.php?module=dashboard">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" 
                id="navbarDropdownMenuLink" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false" style="color:white">
                    Master Data
                </a>
                    <div class="dropdown-menu" 
                    aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="menu.php?module=view_barang">View Barang</a>
                        <a class="dropdown-item" href="laporan_barang.php" target="_blank">Laporan</a>
                    </div>    
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="menu.php?module=manajemenuser">
                Manajemen User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="logout.php">Logout</a>
            </li>
    </ul>        
</nav>    
    <?php
    if(isset($_GET['module'])) {
        $module=$_GET['module'];
        switch ($module){
            case 'manajemenuser':
                include "view_user.php";
                break;
            case 'dashboard':
                include "welcome.php";
                break;
            case 'view_barang':
                include "view_barang.php";
                break;
            case 'input_barang':
                include "input_barang.php";
                    break;
            case 'edit_barang':
                include "edit_barang.php";
                    break;
        }
    }
    ?>
</body>
</html>
