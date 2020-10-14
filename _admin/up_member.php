<?php
include_once('header.php')
?>
    <div class="box">
        <h3>
            Edit Member
            <div class="pull-right">
                <a href="member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h3>
    <div>
        <div class="row" style="width:auto; margin-top: 80px;">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="judul_buku">NIM</label>
                    <input type="text" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="pengarang">Nama Lengkap</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="penerbit">Fakultas</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tahun">No. Telp</label>
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