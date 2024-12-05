<?php
include_once "koneksi/koneksi.php";
$database = new Config();
$db = $database->getConnection();

	include_once 'koneksi/koneksi-admin.php';

	$pro = new Admin($db);
	
	$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
	$pro->id = $id;
	
	if($pro->delete()){
		echo "<script>alert('Berhasil Hapus Data');location.href='admin.php';</script>";
	}
	
	else{
		echo "<script>alert('Gagal Hapus Data');location.href='admin.php';</script>";
		
	}
?>
