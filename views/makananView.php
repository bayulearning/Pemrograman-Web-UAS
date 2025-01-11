<div class="card card-primary card-outline shadow-lg p-3 mb-5 bg-body rounded"> 
    <div class="card-header" style="align-items:center"> 
        <h5 class="float-start mt-2 fw-bold">Daftar Makanan Tradisional</h5> 
        <div class="float-end"> 
            <a title="Tambah data" href="?page=makananAdd" 
            class="btn btn-sm btn-success"> Tambah Data</a> 
            </div> 
            </div>
        <div class="card-body"> 
            <table id="example" class="display" style="width:100%"> 
                <thead> 
                    <tr> 
                        <th class="text-center">No.</th> 
                        <th class="text-center">Nama Makanan</th> 
                        <th class="text-center">Asal Daerah</th> 
                        <th class="text-center">Keterangan</th> 
                    </tr> 
                </thead> 
            <tbody> 
                <tr> 
                <?php $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC"; 
                $sql = mysqli_query($conn, $query); $nomor = 1;
                foreach ($sql as $val) { 
                    ?> 
                    <td class="text-center">
                        <?= $nomor++; ?></td> 
                        <td><?= $val['nama_makanan']; ?></td> 
                        <td><?= $val['daerah_makanan']; ?></td> 
                        <td class="text-center"> 
                            <a href="?page=makananUpdate&id=<?= $val['id_makanan']; ?>" class="btn btn-sm btn-warning"> Update</a> 
                            <a href="?page=makananDelete&id=<?= $val['id_makanan']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?');">Hapus</a> 
                        </td> 
                    </tr> 
                    <?php 
                } 
                ?> 
                </tbody> 
                <tfoot> 
                    <tr> 
                        <th class="text-center">No.</th> 
                        <th class="text-center">Nama Makanan</th> 
                        <th class="text-center">Asal Daerah</th> 
                        <th class="text-center">Keterangan</th> 
                    </tr> 
                </tfoot>
             </table> 
            </div> 
        </div>