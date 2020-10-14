<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>IMK | PERPUS</title>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../_assets/css/style.css">
	<link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	*{
		padding: 0px;
		margin:0px;
		font-family: 'Quicksand', sans-serif;
		font-size: 17px; 
	}
	.banner1 {
		background-color: white;
		color: black;
	}
	.nav1{
		background-color: rgba(24, 48, 147);
		width:100%; 
		height:60px;
	}
	.sidebar1{
			position: fixed;
			top: 0;
			bottom: 0;
			left: -300px;
			width: 300px;
			background-color: rgba(24, 48, 147, .9);
			transition: .3s;
		}
		.sidebar1 ul li a{
			color: white;
			line-height:70px;
			text-align:center;
			width: 300px;
			height: 70px;
			display: block;
		}
		.sidebar1 ul li {
	
			transition: .3s;
			
		}
		.sidebar1 ul li:hover{
			background-color: #FF7433;
		}
		.tembus {
      		top:33%;
      		background-color: rgba(24, 48, 147, .5);
      		height:200px;
      		width:100%;
      		display:flex;
      		justify-content:center;
      		padding: 50px;
      		color: white;
   		}
   		body{
   			background-image: url('3.jpg');
   		}

	</style>
</head>
<body>
<!-- sidebar -->
<input type="checkbox" id="check">
<div class="sidebar1">
	<ul>
		<li><a href="index.php" style="text-decoration: none; color: white; "> Home</a></li>
		<li><a href="member.php" style="text-decoration: none; color: white;"> Data Anggota</a></li>
		<li><a href="transaksi.php" style="text-decoration: none; color: white;"> Transaksi</a></li>
		<li><a href="book.php" style="text-decoration: none; color: white;"> Data Buku</a></li>
		<li><a href="../index.php" style="text-decoration: none; color: white;"><i class="glyphicon glyphicon-log-out"></i>LogOut</li></a>
	</ul>
</div>

<div class="nav1">
	<div style="margin-left:30px;">
		<ul>
			<li><a href="index.php" style="text-decoration: none; color: white; "> Home</a></li>
			<li><a href="member.php" style="text-decoration: none; color: white;"> Data Anggota</a></li>
			<li><a href="transaksi.php" style="text-decoration: none; color: white;"> Transaksi</a></li>
			<li><a href="book.php" style="text-decoration: none; color: white;"> Data Buku</a></li>
		</ul>
		<ul style="float: right; margin-right:30px;">
			<li><a href="../index.php" style="text-decoration: none; background-color: #d9534f; border-radius: 5px; color: white;"><i class="glyphicon glyphicon-log-out"></i>LogOut</li></a>
		</ul>
	</div>
	<label for="check" class="mobile" style="margin-right: 10px;"><i class="fas fa-bars fa-2x"></i></label>
</div>

<div class="banner1 tembus" style="margin-top: 100px;">
		<h1 style="margin-top: 90px;">SELAMAT DATANG</h1>
</div>
<div class="tembus" style="height: 250px;">
		<h2>DI SISTEM INFORMASI PERPUSTAKAAN</h2>
</div>

</body>
</html>