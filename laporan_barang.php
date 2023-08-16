<div class="container-fluid mx-auto mt-5">  
    <p style="text-align:center">DAFTAR PENDATAAN BARANG</p>   
    <hr> 
        <table border="1" cellpadding="5" width="100%">
            <thead style="background-color:burlywood;color:white"> 
            <tr>  
                <th width="10%" style="text-align:center">Id</th>
                <th width="20%" style="text-align:left">Nama Barang</th>
                <th width="20%" style="text-align:left">Stok</th>
                <th width="25%" style="text-align:left">Harga Beli</th>
                <th width="25%" style="text-align:left">Harga Jual</th>
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
                </tr>
                <?php } ?>
            </tbody>
        </table>
</div>
<script>
    window.print();
</script>