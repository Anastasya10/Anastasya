<?php
    include '../config/koneksi.php';
    $idbarang=$_GET['id_barang'];
    $sql=mysqli_query($koneksi,"select * from tbl_barang where id_barang='$idbarang'");
    $data=mysqli_fetch_assoc($sql);
?>
<div class="card mx-auto mt-3" style="width:1250px">
    <div class="card-header" style="background-color:burlywood;color: white">
        <h3>Edit Data Barang</h3>
    </div>
    <div class="card-body">
    <form action="proses_updatebarang.php" method="post">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="txtNamaBarang" value="<?php echo $data['nama_barang']?>">
                <input type="HIDDEN" class="form-control" name="txtIDBarang" value="<?php echo $data['id_barang']?>">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="txtStok" value="<?php echo $data['stok']?>">
            </div>
            <div class="form-group">
                <label>Harga Beli</label>
                <input type="number" class="form-control" name="txtHargaBeli" value="<?php echo $data['harga_beli']?>">
            </div>
            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" class="form-control" name="txtHargaJual" value="<?php echo $data['harga_jual']?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Rekam</button>
                <a href="menu.php?module=view_barang" type="button" class="btn btn-success">Batal</a>
            </div>
    </form>
    </div>
</div>
    