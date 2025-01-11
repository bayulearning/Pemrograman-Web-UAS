<?php // cek apakah tombol simpan sudah diklik atau blum? 
if (isset($_POST['submit'])) { 
    // ambil data dari formulir 
    $nama_minuman = $_POST['nama_minuman']; 
    $daerah_minuman = $_POST['daerah_minuman']; 
    // buat query 
    $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUE ('$nama_minuman', '$daerah_minuman')"; 
    $sql = mysqli_query($conn, $query); // apakah proses simpan berhasil?
    if ($sql) { 
        echo "<script>window.alert('Data berhasil ditambah!'); window.location='?page=minuman';</script>"; 
        } else { 
            echo "<script>window.alert('Gagal menambah data!'); window.location='?page=minuman';</script>"; 
            } 
            } 
            ?> 
            <div class="p-4"> 
                <div class="d-flex justify-content-center"> 
                    <div class="row-12 w-75"> 
                        <div class="card card-primary card-outline"> 
                            <div class="card-header"> 
                                <h5 class="m-0">Tambah Data Daftar Minuman</h5> 
                            </div> 
                            <div class="card-body"> 
                                <form method="post" action=""> 
                                    <div class="row"> 
                                        <div class="mb-3"> 
                                            <label for="formGroupExampleInput" class="form-label">Nama Minuman</label> 
                                            <input type="text" class="form-control" name="nama_minuman"> </div> 
                                            <div class="mb-3"> 
                                                <label for="formGroupExampleInput2" class="form-label">Daerah Minuman</label> 
                                                <input type="text" class="form-control" name="daerah_minuman"> 
                                            </div> 
                                        </div> 
                                        <div class="row justify-content-center"> 
                                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mx-0" 
                                            style="width: 7em; height:2.4em text-align:centered">Submit</button> 
                                          <input class="btn btn-warning mx-2 custom-btn" type="reset" value="Reset" style="width: 7em; height: 2.5em; text-align: center; line-height: 0px;transition: color 0.3s;" onmouseover="this.style.color='white'" onmouseout="this.style.color='';">
                                            <a class="btn btn-primary" href="?page=minuman" role="button" 
                                            style="width: 7em; height:2.4em text-align:centered">Cancel</a>
                                        </div> 
                                    </form> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
            </div>