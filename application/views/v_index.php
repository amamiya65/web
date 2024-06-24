<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets\css\stylebook.css">
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
	bottom: -240px;
	right: 9%;
   }
   footer a{
	color: #fff;
	text-decoration: none;
   }
   section{
	padding: 18px;
	
	right: 20px;
	left: 60px;
	background-color: #fff;
	background-clip: content-box;
    width: 1099px;
   }
   
</style>
<body>
	<section>
		<h1><?php echo $judul ?></h1>
		<p align=’justify’>Pada pengertian codeigniter di atas
			tadi di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu
			MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih
			jauh dalam belajar codeigniter.</p>
		<p>MVC adalah teknik atau konsep yang memisahkan
			komponen utama menjadi tiga komponen yaitu model, view dan
			controller.</p>

		<ol type=”a”>
			<li>Model</li>
			<p align=’justify’>Model adalah kelas yang merepresentasikan atau
				memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga
				dapat didefinisakn sebagai bagian penanganan yang berhubungan dengan
				pengolahan atau manipulasi database. Seperti misalnya mengambil data
				dari database, menginput dan pengolahan database lainnya. Semua
				intruksi atau fungsi yang berhubung dengan pengolahan database di
				letakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi
				untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan
				objek lingkaran sebagai kelas model.</p>
			<p align=’justify’>Sebagai catatan, Semua model harus disimpan di
				dalam folder application\models</p>
			<li>View</li>
			<p align=’justify’>View merupakan bagian yang menangani halaman user
				interface atau halaman yang muncul pada user(pada browser). Tampilan
				dari user interface di kumpulkan pada view untuk memisahkannya
				dengan controller dan model sehingga memudahkan web designer dalam
				melakukan pengembangan tampilan halaman website.</p>
			<li>Controller</li>
			<p align=’justify’>Controller merupakan kumpulan intruksi aksi yang
				menghubungkan model dan view, jadi user tidak akan berhubungan
				dengan model secara langsung, intinya data yang tersimpan di
				database (model) di ambil oleh controller dan kemudian controller
				pula yang menampilkan nya ke view. Jadi controller lah yang mengolah
				intruksi.</p>
			<p align=’justify’>Dari penjelasan tentang model view dan controller
				di atas dapat di simpulkan bahwa controller sebagai penghubung view
				dan model. Misalnya pada aplikasi yang menampilkan data dengan
				menggunakan metode konsep mvc, controller memanggil intruksi pada
				model yang mengambil data pada database, kemudian controller yang
				meneruskannya pada view untuk di tampilkan. Jadi jelas sudah dan
				sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena
				web designer atau front-end developer tidak perlu lagi berhubungan
				dengan controller, dia hanya perlu berhubungan dengan view untuk
				mendesign tampilann aplikasi, karena back-end developer yang
				menangani bagian controller dan modelnya. Jadi pembagian tugas pun
				menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan
				cepat dan terstruktur.</p>
	</section>
</body>

</html>
