<?php
include_once 'header.php';
$ia = isset($_GET['ia']) ? $_GET['ia'] : die('ERROR: missing ID.');

include_once 'koneksi/koneksi-data-training.php';
$eks = new DataTraining($db);
$pgn1 = new DataTraining($db);

$eks->ia = $ia;

$eks->readOne();

if($_POST){

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
	
	if($eks->update()){
		echo "<script>location.href='pasien-lama.php'</script>";
	} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="well">
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-12">
		  	<div class="page-header">
			  <center><h5>Edit Data Diagnosa Pasien Lama</h5></center>
			</div>
			
			    <form method="post">

				<div class="form-group">
				    <label for="aa">Nama Pasien Baru</label>
				    <input type="text" class="form-control" id="aa" name="aa" value="<?php echo $eks->aa; ?>" required>
				</div>

				<div class="form-group">
				  	<label for="bb">Gejala Komunikasi</label>
				    <select class="form-control" id="bb" name="bb" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g1}'>{$g1}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Kesulitan Berkomunikasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="cc">Gejala Halusinasi</label>
				    <select class="form-control" id="cc" name="cc" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g2}'>{$g2}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Halusinasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="dd">Gejala Suasana Hati</label>
				    <select class="form-control" id="dd" name="dd" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g3}'>{$g3}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Suasana Hati</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ee">Gejala Kosentrasi</label>
				    <select class="form-control" id="ee" name="ee" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g4}'>{$g4}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Konsentrasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ff">Gejala Gangguan Tidur</label>
				    <select class="form-control" id="ff" name="ff" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g5}'>{$g5}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Tidur</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="gg">Gejala Sosialisasi</label>
				    <select class="form-control" id="gg" name="gg" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g6}'>{$g6}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Tidak Dapat Bersosialisasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="gg">Mood</label>
				    <select class="form-control" id="gg" name="gg" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g7}'>{$g7}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Mood Labil Atau Datar</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ii">Gangguan Persepsi, Memori Dan Integensi</label>
				    <select class="form-control" id="ii" name="ii" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g8}'>{$g8}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Terganggu</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="jj">Perhatian Keluarga</label>
				    <select class="form-control" id="jj" name="jj" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g9}'>{$g9}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Tidak Diperhatikan</option>
				    	<option value='0'>Diperhatikan</option>";?>
				    </select>
				</div>

				<div class="form-group">
				    <label for="kk">Hasil Diagnosa</label>
				    <input type="text" class="form-control" id="kk" name="kk" value="<?php echo $eks->kk; ?>" required>
				</div>


				  <button type="submit" class="btn btn-primary">EDIT</button>
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