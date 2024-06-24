<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets\css\stylebook.css">
	<title>Web Prog II | Merancang Template sederhana dengan Codeigniter</title>
</head>
<style>
	body{
	background: #eee;
	color: #333;
	font-family: sans-serif;
	font-size:15px;
	padding: 10px;
   }
   #wrapper{
	background-color: black;
	height: 150px;
	width: 1100px;
	margin: 60px ;
   }
   #wrapper header{
	background: #232323;
	padding: 0px;
   }
   #wrapper header hgroup{
	float: left;
	color: #fff;
   }
   #wrapper header nav{float: right;
	margin-top: 59px;
   }
   #wrapper header nav ul{
	padding: 1;
	margin: 0;
   }
   #wrapper header nav ul li{
	float: left;
	list-style: none;
   }
   #wrapper header nav ul li a{
	padding: 15px;
	color: #fff;
	text-decoration: none;
   }
   .clear{
	clear: both;
   }
   footer{
	background: #232323;
	padding: 20px;
	width: 1060px;
	position: absolute;
	bottom: -240px;
	right: 9%;
   }
   footer a{
	color: #fff;
	text-decoration: none;
   }
   section{
	padding: 18px;
	position: absolute;
	top: 210px;
	right: 20px;
	left: 60px;
	background-color: #fff;
	background-clip: content-box;
    width: 1099px;
   }
   
</style>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>RentalBuku.net</h1>
				<h3>Membuat Template Sederhana dengan CodeIgniter</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url() . 'index.php/web' ?>">Home</a></li>
					<li><a href="<?php echo base_url() . 'index.php/web/about' ?>">About</a></li>
				</ul>
			</nav>
		</header>
	</div>
</body>

</html>
