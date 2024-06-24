<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Pixelify+Sans:wght@400..700&family=Sedgwick+Ave+Display&display=swap"
		rel="stylesheet">

	<title>Input Data Mahasiswa</title>
	<style>
		body {
			background-image: url(image/minecraft.gif);
			background-repeat: no-repeat;
			background-size: cover;
			font-family: "Pixelify Sans", sans-serif;
		}

		form {
			background-image: url(image/grass.png);
			width: 30%;
			height: 500px;
			position: absolute;
			right: 40%;
			bottom: 16%;

			border-radius: 20px;
		}

		form h1 {
			margin-left: 15%;
		}

		#tbl {
			background: transparent;
			outline: none;
			border: none;
		}

		#tbl img {
			width: 160px;
			position: absolute;
			left: 100px;
			cursor: pointer;
			transition: width 1s, transform 1s;
		}

		#tbl img:hover {
			width: 140px;
		}

		.nama input {
			color: black;
			background: transparent;
			border: none;
			outline: none;
			font-family: "Pixelify Sans", sans-serif;
			margin-left: 40%;
			font-size: 100%;
			border-radius: 10px;
			
		}
		.nama input:hover {
			transition:  1s;
			background-color: white;
		}

		.kelas {
			color: black;
			background: transparent;
			border: none;
			outline: none;
			font-family: "Pixelify Sans", sans-serif;
			margin-left: 40%;
			font-size: 100%;
			border-radius: 10px;
		}
		.kelas:hover {
			transition: 1s;
			background-color: white;
		}

		.nis {
			color: black;
			background: transparent;
			border: none;
			outline: none;
			font-family: "Pixelify Sans", sans-serif;
			margin-left: 40%;
			font-size: 100%;
			border-radius: 10px;
		}
		.nis:hover {
			transition: 1s;
			background-color: white;
		}

		.tanggal_lahir {
			color: white;
			background: transparent;
			border: none;
			outline: none;
			font-family: "Pixelify Sans", sans-serif;
			margin-left: 40%;
			font-size: 100%;
		}
		.tanggal_lahir:hover {
			transition: 1s;
			background-color: white;
			color: black;
		}
		#alamat {
			color: black;
			background: transparent;
			border: none;
			outline: none;
			font-family: "Pixelify Sans", sans-serif;
			margin-left: 40%;
			font-size: 100%;
			border-radius: 10px;
		}
		#alamat:hover {
			transition: 1s;
			background-color: white;
		}
		.tempat_lahir {
			color: black;
			background: transparent;
			border: none;
			outline: none;
			font-family: "Pixelify Sans", sans-serif;
			margin-left: 40%;
			font-size: 100%;
			border-radius: 10px;
		}
		.tempat_lahir:hover {
			transition: 1s;
			background-color: white;
		}
		.gender {
			font-family: "Pixelify Sans", sans-serif;
			margin-left: 40%;
			font-size: 100%;
			color: white;
		}
		#agama {
			font-family: "Pixelify Sans", sans-serif;
			margin-left: 40%;
			font-size: 100%;
			color: white;
			border: none;
			outline: none;
			background: transparent;
			border-radius: 10px;
		}
		#agama:hover {
			transition: 1s;
			background-color: white;
			color: black;
		}
	</style>
</head>

<body>
	<form action="<?php echo site_url('panggil/index'); ?>" method="post" >
		<h1>Data Mahasiswa</h1>
		<div class="nama">
			<input type="text" placeholder="Nama" name="nama"><br><br>
		</div>
		<input type="text" class="nis" placeholder="NIS" name="nis"><br><br>
		<input type="text" class="kelas" placeholder="Kelas" name="kelas"><br><br>
		<input type="date" class="tanggal_lahir" name="tanggal_lahir"><br><br>
		<input type="text" class="tempat_lahir" placeholder="Temapat Lahir" name="tempat_lahir"><br><br>
		<textarea name="alamat" id="alamat" placeholder="Alamat"></textarea><br><br>
		<div class="gender" nama="gender" value="gender">
			<input type="radio" name="gender" value="Lelaki">
			<label>Pria</label>
			<input type="radio" name="gender" value="Perempuan">
			<label>Perempuan</label><br><br>
		</div>
		<select name="agama" id="agama">
			<option value="--">agama</option>
			<option value="islam">islam</option>
			<option value="kristen">keristen</option>
			<option value="katolik">katolik</option>
			<option value="budha">budha</option>
			<option value="hindu">hindu</option>
			<option value="protestan">protestan</option>
			<option value="khonghucu">khonghucu</option>
		</select><br><br>
		<div>
			<button type="submit" id="tbl"><a href="../../pustaka-booking-m.yahya"><img src="image/L.png" ></a></button>
		</div>
		<script>
        var myVar;
        function myFunction() {
            myVar = setTimeout(showpAGE,1000)
        }
        function showpAGE(){
           
             document.getElementById("myDiv").style.display = "block";
        }
    </script>
	</form>

</body>

</html>


