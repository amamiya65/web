<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
	<title>Document</title>
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
	bottom: -75px;
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
	<section>
		<h1>
			<?php echo $judul ?>
		</h1>
		<h4>Nama</h4>
		<ul type="disc">
			<li>Nama Depan : yahya</li>
			<li>Nama Belakang : majid</li>
		</ul>
		<br>
		<h4>Alamat</h4>
		<ul type="none">
			<li> Ujung Malang Bekasi</li>
		</ul>

		<h4>Tempat Lahir</h4>
		<ul type="none">
			<li>di jungMalang</li>
		</ul>
		<h4>Olah Raga Favorit</h4>
		<ul type="square">
			<li>Bermain Game</li>
			<li>Catur</li>
			<li>Baca Manga</li>
		</ul>
	</section>

</body>

</html>
