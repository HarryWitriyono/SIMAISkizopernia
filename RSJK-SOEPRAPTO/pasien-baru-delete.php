<?php
include_once "koneksi/koneksi.php";
$database = new Config();
$db = $database->getConnection();

include_once 'koneksi/koneksi-data-uji.php';
$pro = new DataUji($db);
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->id = $id;
	
if($pro->delete()){
	echo "<script>location.href='pasien-baru.php';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data !');location.href='pasien-baru.php';</script>";
		
}
?>
