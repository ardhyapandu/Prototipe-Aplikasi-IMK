<?php include_once('header.php') ?>

<div class="box">
	<h1>Member</h1>
	<h4>
		<small>Data Member</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add_member.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Member</a>
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
					<th>No. Identitas</th>
					<th>Nama Anggota</th>
					<th>Fakultas</th>
					<th>No. Telp</th>
					<th><i class="glyphicon glyphicon-cog"></i></th>
				</tr>
			</thead>
			<tbody style="text-align: center; color: black;">
				<tr>
					<td>0001</td>
					<td>agin saputra</td>
					<td>ilmu komputer</td>
					<td>081123456789</td>
					<td class="text-center">
						<a href="up_member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr>
				<tr>
					<td>0002</td>
					<td>ananda</td>
					<td>ilmu komputer</td>
					<td>081123456789</td>
					<td class="text-center">
						<a href="up_member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr><tr>
					<td>0003</td>
					<td>ardhya</td>
					<td>ilmu komputer</td>
					<td>081123456789</td>
					<td class="text-center">
						<a href="up_member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr><tr>
					<td>0004</td>
					<td>dicky</td>
					<td>ilmu komputer</td>
					<td>081123456789</td>
					<td class="text-center">
						<a href="up_member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr><tr>
					<td>0005</td>
					<td>hira</td>
					<td>hukum</td>
					<td>081123456789</td>
					<td class="text-center">
						<a href="up_member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr><tr>
					<td>0006</td>
					<td>nadya</td>
					<td>ekonomi bisnis</td>
					<td>081123456789</td>
					<td class="text-center">
						<a href="up_member.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="member.php" onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>		
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php include_once('footer.php') ?>