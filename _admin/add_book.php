<?php
include_once('header.php')
?>
    <div class="box">
        <h3>
            Tambah Buku Baru
            <div class="pull-right">
                <a href="book.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h3>
    <div>
        <div class="row" style="width:auto;">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label>Pengarang</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label >Tahun</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label >Jumlah</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label >Rak</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group pull-right">
                    <a href="member.php" class="btn btn-success">Simpan</a>
                </div>
                </form> 
            </div>
        </div>
    </div>
    </div>
<?php
include_once('footer.php')
?>