<div class="card mx-auto mt-3" style="width:1250px">
    <div class="card-header" style="background-color:burlywood;color: white">
        <h3>Input Data Barang</h3>
    </div>
    <div class="card-body">
    <form action="proses_rekambarang.php" method="post">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="txtNamaBarang" required>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="txtStok" required>
            </div>
            <div class="form-group">
                <label>Harga Beli</label>
                <input type="number" class="form-control" name="txtHargaBeli" required>
            </div>
            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" class="form-control" name="txtHargaJual" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Rekam</button>
                <a href="menu.php?module=view_barang" type="button" class="btn btn-success">Batal</a>
            </div>
    </form>
    </div>
</div>
    