<div class="card mx-auto mt-3" style="width:1250px">
    <div class="card-header" style="background-color:burlywood;color: white">
        <h3>View Data Barang</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead> 
            <tr>  
                <th width="10%" style="text-align:center">Id</th>
                <th width="20%" style="text-align:left">Nama Barang</th>
                <th width="20%" style="text-align:left">Stok</th>
                <th width="20%" style="text-align:left">Harga Beli</th>
                <th width="20%" style="text-align:left">Harga Jual</th>
                <th width="10%" style="text-align:center">Aksi</th>
            </tr> 
            </thead>
            <tbody>
                <tr>
                    <?php 
                        include'../config/koneksi.php';
                        $sql=mysqli_query($koneksi,"select * from tbl_barang");
                        $id=1;
                        while($data=mysqli_fetch_assoc($sql))
                        {
                    ?>
                    <td style="text-align:center"><?php echo $id++ ?></td>
                    <td style="text-align:left"><?php echo $data['nama_barang'] ?></td>
                    <td style="text-align:left"><?php echo $data['stok'] ?></td>
                    <td style="text-align:left"><?php echo $data['harga_beli'] ?></td>
                    <td style="text-align:left"><?php echo $data['harga_jual'] ?></td> 
                    <td>
                        <a href="menu.php?module=edit_barang&id_barang=<?php echo $data['id_barang']?>" type="button" class="btn btn-sm btn-primary">Edit</a>
                        <a href="proses_hapusbarang.php?id_barang=<?php echo $data['id_barang']?>" type="button" class="btn btn-sm btn-info">Del</a>
                    </td>         
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="menu.php?module=input_barang" class="btn btn-sm btn-block" style="background-color:burlywood;color: white" name="tblInput">Input</a>
    </div>
</div>