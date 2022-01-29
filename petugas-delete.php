<?php
           
        
    if(isset($_GET['hapus'])){
        $id_petugas = $_GET['id'];
        $query_delete = mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas = '$id_petugas'");
       if ($query_delete) {

          ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Berhasil Di Hapus
                    <script>window.location.href='http://localhost/15_mywebsite_12RPL2/admin.php?page=petugas';</script>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
       }
       }
?>