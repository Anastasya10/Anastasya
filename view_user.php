<div class="card mx-auto mt-3" style="width:1250px">
    <div class="card-header" style="background-color:burlywood;color:white">
        <h3>Sign Up (Manajemen User)</h3>
    </div>
    <div class="card-body">
        <form action="proses_rekamuser.php" method="post">
            <div class="form-group">
                <label>Nama Username</label>
                <input type="text" class="form-control" name="txtUser" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="txtPass" required>
            </div>
            <div class="form-group">
                <label>Ulangi Password</label>
                <input type="text" class="form-control" name="txtUlangiPass" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Rekam</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <p class="py-3">Sudah jadi mi akunnya, Login Mi <a href="../index.php">disini</a></p>
            </div>
        </form>
    </div>
</div>    