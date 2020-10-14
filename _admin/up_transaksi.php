<?php
include_once('header.php')
?>
    <div class="box">
        <h3>
            Edit Peminjam 
            <div class="pull-right">
                <a href="transaksi.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h3>
    <div>
        <div class="row" style="width:auto; margin-top: 30px;">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label >Tanggal Kembali</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label >Status Pengembalian</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group pull-right">
                    <a href="member.php" class="btn btn-success">Update</a>
                </div>
                </form> 
            </div>
        </div>
    </div>
    </div>
<?php
include_once('footer.php')
?>