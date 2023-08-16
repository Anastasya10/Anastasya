<html>
    <head>
        <title>Project Sederhana | Pendataan Barang</title>
        <link rel="stylesheet" href="assets/assets/bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="assets/assets/bootstrap/js/bootstrap.min.js"></script>
        <style>
            body{
                background-color:#CDAA7D;
                background-repeat: no-repeat;
            }
            #card{
                background: #fbfbfb;
                border-radius: 8px;
                box-shadow: 1px 2px 8px rgba(0,0,0, 0.65);
                height: 460px;
                margin:6rem auto 8.1rem auto;
                width: 360px;
            }
            #card-title{
                letter-spacing:4px;
                padding-bottom:23px;
                padding-top:13px;
                text-align:center;
            }
            #card-content{
                padding:12px 44px;
            }
            a{
                text-decoration:none;
            }
        </style>
    </head>
    <body>
        <div id="card">
            <div id="card-title">
            <img src="images/profile.png" class="center"
                     width="35%"
                     style="border-radius:50%;margin-top:5px">
                <h5>LOGIN USER</h5>
            </div>
            <div id="card-content">
            <form action="cek_login.php" method="POST">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="txtusername" class="form-control" placeholder="username" autofocus>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="txtpassword" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <button type="submit" name="kirim" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
            </div>
        </div>
    </body>
</html>