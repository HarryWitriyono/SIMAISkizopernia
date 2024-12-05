<?php
include "koneksi/koneksi.php";
session_start();
if(!isset($_SESSION['nama_lengkap'])){
	echo "<script>location.href='login.php'</script>";
}
$config = new Config();
$db = $config->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSJK SOEPRAPTO BENGKULU</title>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
	<style>
	.navbar-inverse {
		background: #58a6d0;
		width: 100%;
		height: 80px;
		border-color:  #a0d2f5;
	}
	.menu {
		font-size : 18px;
		margin: 6px;
		margin-top: 13px;
		color: #fff!important;
		font-weight: 600;
		font-family: Franklin Gothic;
	}
	.menu:hover {
	font-weight: 700;
	color: #184462!important;
	opacity: 100%
	}


	
	</style>
  </head>
  <body>
  
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container-fluid" >
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li ><a class="menu" href="home.php">Home</a></li>
			<li><a class="menu" href="pasien-lama.php">Diagnosa Pasien Lama</a></li>
			<li><a class="menu" href="pasien-baru.php">Diagnosa Pasien Baru</a></li>
			<li><a class="menu" href="hasil-prediksi-diagnosa.php">Hasil Prediksi Diagnosa</a></li>
			<li><a class="menu" href="admin.php">Admin</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
				<li><a class="menu" href="logout.php">Logout</a></li>
			  </ul>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>
    <div class="container">