<?php
include_once "koneksi/koneksi.php";
$database = new Config();
$db = $database->getConnection();

include_once 'koneksi/koneksi-data-training.php';
$pro = new DataTraining($db);
$ia = isset($_GET['ia']) ? $_GET['ia'] : die('ERROR: missing ID.');
$pro->ia = $ia;
	
if($pro->delete()){
	echo "<script>location.href='pasien-lama.php';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data !');location.href='pasien-lama.php';</script>";
		
}
?>
