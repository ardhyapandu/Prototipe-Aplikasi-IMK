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
	<link rel="stylesheet" type="text/css" href="_assets/css/style.css">
	<link href="_assets/css/bootstrap.min.css" rel="stylesheet">
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
			display: block;
			width: 300px;
			height: 70px;
		}
		.sidebar1 ul li {
	
			transition: .3s;
			
		}
		.sidebar1 ul li:hover{
			background-color: #FF7433;
		}
		.tembus {
      		top:33%;
      		background-color: rgba(0, 150, 0, 0.2);
      		height:200px;
      		width:100%;
      		display:flex;
      		justify-content:center;
   		} 
	</style>
</head>
<body>
<!-- sidebar -->
<input type="checkbox" id="check">
<div class="sidebar1">
	<ul>
		<li><a href="index.php" style="text-decoration: none; color: white; "><span class="glyphicon glyphicon-home" arial-hidden="true"></span> Home</a></li>
		<li><a href="pencarian.php" style="text-decoration: none; color: white; "><span class="glyphicon glyphicon-search" arial-hidden="true"></span> Pencarian</a></li>
		<li><a href="about.php" style="text-decoration: none; color: white;"><span class="glyphicon glyphicon-info-sign" arial-hidden="true"></span> About</a></li>
		<li><a href="contact.php" style="text-decoration: none; color: white;"><span class="glyphicon glyphicon-earphone" arial-hidden="true"></span> Contact</a></li>
		<li><a href="login.php" style="text-decoration: none; color: white;"><i class="glyphicon glyphicon-log-in"></i>Pustakawan</li></a>
	</ul>
</div>

<div class="nav1">
	<div style="margin-left:30px;">
		<ul>
			<li><a href="index.php" style="text-decoration: none; color: white; "><span class="glyphicon glyphicon-home" arial-hidden="true"></span> Home</a></li>
			<li><a href="pencarian.php" style="text-decoration: none; color: white; "><span class="glyphicon glyphicon-search" arial-hidden="true"></span> Pencarian</a></li>
			<li><a href="about.php" style="text-decoration: none; color: white;"><span class="glyphicon glyphicon-info-sign" arial-hidden="true"></span> About</a></li>
			<li><a href="contact.php" style="text-decoration: none; color: white;"><span class="glyphicon glyphicon-earphone" arial-hidden="true"></span> Contact</a></li>
		</ul>
		<ul style="float: right; margin-right:30px; background-color: #5cb85c; border-radius: 5px; ">
			<li><a href="login.php" style="text-decoration: none; color: white;"><i class="glyphicon glyphicon-log-in"></i>Pustakawan</li></a>
		</ul>
	</div>
	<label for="check" class="mobile" style="margin-right: 10px;"><i class="fas fa-bars fa-2x"></i></label>
</div>

<section class="banner1">
	
	<div class="container">