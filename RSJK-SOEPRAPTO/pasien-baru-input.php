<?php
include_once 'header.php';
if($_POST){
	
	include_once 'koneksi/koneksi-data-uji.php';
	$eks = new DataUji($db);

	$eks->aa = $_POST['aa'];
	$eks->bb = $_POST['bb'];
	$eks->cc = $_POST['cc'];
	$eks->dd = $_POST['dd'];
  	$eks->ee = $_POST['ee'];
	$eks->ff = $_POST['ff'];
	$eks->gg = $_POST['gg'];
	$eks->hh = $_POST['hh'];
	$eks->ii = $_POST['ii'];
	$eks->jj = $_POST['jj'];
	$eks->kk = $_POST['kk'];
	$eks->ll = $_POST['ll'];

	
	if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="pasien-baru.php">lihat semua data</a>.
</div>
<?php
	}
	
	else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="well">
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-12">
		  	<div class="page-header">
			  <center><h5>Input Data Diagnosa Pasien Baru</h5></center>
			</div>
			
			    <form method="post">

				<div class="form-group">
				    <label for="aa">Nama Pasien Baru</label>
				    <input type="text" class="form-control" id="aa" name="aa" required>
				</div>

				<div class="form-group">
				    <label for="bb">Jenis Kelamin</label>
				    <select class="form-control" id="bb" name="bb" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='Laki-Laki'>Laki-Laki</option>
				    	<option value='Perempuan'>Perempuan</option>
				    </select>
				</div>

				<div class="form-group">
				    <label for="cc">Tanggal Lahir</label>
				    <input type="date" class="form-control" id="cc" name="cc" required>
				</div>

				<div class="form-group">
				  	<label for="dd">Gejala Komunikasi</label>
				    <select class="form-control" id="dd" name="dd" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Kesulitan Berkomunikasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ee">Gejala Halusinasi</label>
				    <select class="form-control" id="ee" name="ee" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Halusinasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ff">Gejala Suasana Hati</label>
				    <select class="form-control" id="ff" name="ff" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Suasana Hati</option>
				    	<option value='0'>Tidak Ada Gejala</option>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="gg">Gejala Kosentrasi</label>
				    <select class="form-control" id="gg" name="gg" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Konsentrasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="hh">Gejala Gangguan Tidur</label>
				    <select class="form-control" id="hh" name="hh" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Tidur</option>
				    	<option value='0'>Tidak Ada Gejala</option>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ii">Gejala Sosialisasi</label>
				    <select class="form-control" id="ii" name="ii" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Tidak Dapat Bersosialisasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="jj">Mood</label>
				    <select class="form-control" id="jj" name="jj" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Mood Labil Atau Datar</option>
				    	<option value='0'>Tidak Ada Gejala</option>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="kk">Gangguan Persepsi, Memori Dan Integensi</label>
				    <select class="form-control" id="kk" name="kk" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Terganggu</option>
				    	<option value='0'>Tidak Ada Gejala</option>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ll">Perhatian Keluarga</label>
				    <select class="form-control" id="ll" name="ll" required>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Tidak Diperhatikan</option>
				    	<option value='0'>Diperhatikan</option>
				    </select>
				</div>

				  <button type="submit" class="btn btn-primary">SAVE</button>
				</form>		  
			  
		  </div>
		  
		</div>
		<style>
			h5 {
		font-family: impact;
    margin-left: 15px;
    font-size: 25px;
    color: #58a6d0;
			}
			button {
				width: 200px;
				font-size: 20px;
			}
		</style>
	