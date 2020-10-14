<?php include_once('header.php') ?>

<div class="box">
	<h1>Data Peminjam</h1>
	<h4>
		<small>Data Pinjam</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add_transaksi.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Transaksi</a>
		</div>
	</h4>
	<div style="margin-bottom: 20px;">
		<form class="form-inline" action="" method="post">
			<div class="form-group">
				<input type="text" name="pencarian" class="form-control" placeholder="Pencarian">	
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" arial-hidden="true"></span></button>
			</div>
		</form>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Judul Buku</th>
					<th>Nama Anggota</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Status Pengembalian</th>
					<th>Denda</th>
					<th><i class="glyphicon glyphicon-cog"></i></th>
				</tr>
			</thead>
			<tbody style="text-align: center; color: black;">
				<tr>
					<td>1</td>
					<td>The Art Of Mr. Market</td>
					<td>ardhya</td>
					<td>20 januari 2022</td>
					<td>21 januari 2022</td>
					<td>telah kembali</td>
					<td>0</td>
					<td class="text-center">
						<a href="up_transaksi.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Smart Trader Rich Investor</td>
					<td>dicky</td>
					<td>5 februari 2022</td>
					<td>8 februari 2022</td>
					<td>belum kembali</td>
					<td>Rp 50.000,00</td>
					<td class="text-center">
						<a href="up_transaksi.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr><tr>
					<td>3</td>
					<td>The Intelligent Investor</td>
					<td>ananda</td>
					<td>5 februari 2022</td>
					<td>8 februari 2022</td>
					<td>sudah kembali</td>
					<td>0</td>
					<td class="text-center">
						<a href="up_transaksi.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php include_once('footer.php') ?>