<?php
include_once 'header.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'koneksi/koneksi-data-uji.php';
$eks = new DataUji($db);
$pgn1 = new DataUji($db);

$eks->id = $id;

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
	$eks->ll = $_POST['ll'];
	
	if($eks->update()){
		echo "<script>location.href='pasien-baru.php'</script>";
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
			  <center><h5>Edit Data Diagnosa Pasien Baru</h5></center>
			</div>
			
			    <form method="post">
			
				<div class="form-group">
				    <label for="aa">Nama Pasien Baru</label>
				    <input type="text" class="form-control" id="aa" name="aa" value="<?php echo $eks->aa; ?>" required>
				</div>

				<div class="form-group">
				    <label for="bb">Jenis Kelamin</label>
				    <select class="form-control" id="bb" name="bb" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$jenis_kelamin}'>{$jenis_kelamin}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='Laki-Laki'>Laki-Laki</option>
				    	<option value='Perempuan'>Perempuan</option>";?>
				    </select>
				</div>

				<div class="form-group">
				    <label for="cc">Tanggal Lahir</label>
				    <input type="date" class="form-control" id="cc" name="cc" value="<?php echo $eks->cc; ?>" required>
				</div>

				<div class="form-group">
				  	<label for="dd">Gejala Komunikasi</label>
				    <select class="form-control" id="dd" name="dd" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g11}'>{$g11}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Kesulitan Berkomunikasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ee">Gejala Halusinasi</label>
				    <select class="form-control" id="ee" name="ee" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g22}'>{$g22}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Halusinasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ff">Gejala Suasana Hati</label>
				    <select class="form-control" id="ff" name="ff" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g33}'>{$g33}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Suasana Hati</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="gg">Gejala Kosentrasi</label>
				    <select class="form-control" id="gg" name="gg" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g44}'>{$g44}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Konsentrasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="hh">Gejala Gangguan Tidur</label>
				    <select class="form-control" id="hh" name="hh" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g55}'>{$g55}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Memiliki Gangguan Tidur</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ii">Gejala Sosialisasi</label>
				    <select class="form-control" id="ii" name="ii" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g66}'>{$g66}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Tidak Dapat Bersosialisasi</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="jj">Mood</label>
				    <select class="form-control" id="jj" name="jj" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g77}'>{$g77}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Mood Labil Atau Datar</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="kk">Gangguan Persepsi, Memori Dan Integensi</label>
				    <select class="form-control" id="kk" name="kk" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g88}'>{$g88}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Terganggu</option>
				    	<option value='0'>Tidak Ada Gejala</option>";?>
				    </select>
				</div>

				<div class="form-group">
				  	<label for="ll">Perhatian Keluarga</label>
				    <select class="form-control" id="ll" name="ll" required>
					<?php
						$stmt3 = $pgn1->readAll();
						$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
							extract($row3);
							echo "<option value='{$g99}'>{$g99}</option>
						<option value=''>---Silakan Pilih---</option>
				    	<option value='1'>Tidak Diperhatikan</option>
				    	<option value='0'>Diperhatikan</option>";?>
				    </select>
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