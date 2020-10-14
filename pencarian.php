<?php include_once('header.php') ?>

<div class="jumbotron" style="margin-top: 50px;">
	<h2 align="center">Pencarian</h2>
	<div style="margin-bottom: 20px;">
		<form class="form-inline" action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Judul/Tahun/Pengarang">	
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" arial-hidden="true"></span></button>
			</div>
		</form>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No.</th>
					<th>Judul Buku</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Tahun</th>
					<th>Jumlah</th>
					<th>Rak</th>
				</tr>
			</thead>
			<tbody style="text-align: center; color: black;">
				<tr>
					<td>1.</td>
					<td>Rich Dad Poor Dad</td>
					<td>Robert T. Kiyosaki</td>
					<td>Gramedia Pustaka</td>
					<td>1997</td>
					<td>4</td>
					<td>2</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>The Intelligent Investor</td>
					<td>Serambi Ilmu</td>
					<td>Benjamin Graham</td>
					<td>1949</td>
					<td>2</td>
					<td>1</td>
				</tr>
				<tr>
					<td>3.</td>
					<td>The Art Of Mr. Market</td>
					<td>Elex Media Komputindo</td>
					<td>Fadjar Sidiq Hidayatullah</td>
					<td>2019</td>
					<td>10</td>
					<td>5</td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Smart Trader Rich Investor</td>
					<td>Gramedia Pustaka</td>
					<td>Ellen May</td>
					<td>2013</td>
					<td>1</td>
					<td>4</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>

<?php include_once('footer.php') ?>