<?php
include_once 'header.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
include_once 'koneksi/koneksi-data-uji.php';
$eks = new DataUji($db);
$eks->id = $id;
$eks->readOne();
include_once 'koneksi/koneksi-data-training.php';
$pro = new DataTraining($db);
$stmt = $pro->readKhusus();
?>
<style>
.judul {
    font-family: impact;
    margin-left: 15px;
    font-size: 25px;
    color: #58a6d0;
}
thead {
    background: #58a6d0;
}
th {
    text-align: center;
    color: white;
}
</style>

<div>
	<div class="row">
		<div class="col-md-6 text-left">
			<h4 Class="judul">Nilai Awal Diagnosa Pasien Baru</h4>
		</div>
		
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
				<th>Nama Pasien</th>
                <th>Gejala Komunikasi</th>
                <th>Gejala Halusinasi</th>
                <th>Gejala Suasana Hati</th>
                <th>Gejala Kosentrasi</th>
                <th>Gejala Gangguan Tidur</th>
                <th>Gejala Sosialisasi</th>
                <th>Mood</th>
                <th>Gangguan Persepsi, Memori Dan Integensi</th>
                <th>Perhatian Keluarga</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td><?php echo $eks->aa; ?></td>
				<td><?php echo $eks->dd; ?></td>
				<td><?php echo $eks->ee; ?></td>
				<td><?php echo $eks->ff; ?></td>
				<td><?php echo $eks->gg; ?></td>
				<td><?php echo $eks->hh; ?></td>
				<td><?php echo $eks->ii; ?></td>
				<td><?php echo $eks->jj; ?></td>
				<td><?php echo $eks->kk; ?></td>
				<td><?php echo $eks->ll; ?></td>				
            </tr>

        </tbody>

    </table>
</div>

<div>
<div>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
include_once 'koneksi/koneksi-data-uji.php';
$eks = new DataUji($db);
$eks->id = $id;
$eks->readOne();
include_once 'koneksi/koneksi-data-training.php';
$pro = new DataTraining($db);
$stmt = $pro->readAll();
?>
	<div class="row">
		<div class="col-md-6 text-left">
			<h4 Class="judul">Perhitungan Nilai Eucludien Distance (Jarak)</h4>
		</div>
		
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
				<th>Nama Pasien Lama</th>
                <th>Gejala Komunikasi</th>
                <th>Gejala Halusinasi</th>
                <th>Gejala Suasana Hati</th>
                <th>Gejala Kosentrasi</th>
                <th>Gejala Gangguan Tidur</th>
                <th>Gejala Sosialisasi</th>
                <th>Mood</th>
                <th>Gangguan Persepsi, Memori Dan Integensi</th>
                <th>Perhatian Keluarga</th>
                <th>Hasil</th>
            </tr>
        </thead>

        <tbody>
<?php
$dd=$eks->dd;
$ee=$eks->ee;
$ff=$eks->ff;
$gg=$eks->gg;
$hh=$eks->hh;
$ii=$eks->ii;
$jj=$eks->jj;
$kk=$eks->kk;
$ll=$eks->ll;
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama'] ?></td>
				<td><?php echo $row['g1'] ?></td>
				<td><?php echo $row['g2'] ?></td>
				<td><?php echo $row['g3'] ?></td>
				<td><?php echo $row['g4'] ?></td>
				<td><?php echo $row['g5'] ?></td>
				<td><?php echo $row['g6'] ?></td>
				<td><?php echo $row['g7'] ?></td>
				<td><?php echo $row['g8'] ?></td>
				<td><?php echo $row['g9'] ?></td>
				<td><?php 
						  $hasilnilai = sqrt(pow($row['g1']-$dd,2)+
										 pow($row['g2']-$ee,2)+
										 pow($row['g3']-$ff,2)+
										 pow($row['g4']-$gg,2)+
										 pow($row['g5']-$hh,2)+
										 pow($row['g6']-$ii,2)+
										 pow($row['g7']-$jj,2)+
										 pow($row['g8']-$kk,2)+
										 pow($row['g9']-$ll,2)); 

							echo $hasilnilai;

							$a= $row['id_data_training'];
							$stmtr = $pro->readRDataTraining($a);
							$stmthasil = $pro->readDataTraining($a);
							$hasil = $stmthasil->fetch(PDO::FETCH_ASSOC);
							$hasil = $hasilnilai;
							$pro->ia = $a;
							$pro->ll = $hasil = $hasilnilai;
							$pro->hasilDataTraining();?></td>
            </tr>
<?php
}
?>
        </tbody>

    </table>
</div>	
</div>

<div>
<div>
<?php
include_once 'koneksi/koneksi-data-training.php';
$pro = new DataTraining($db);
$stmt = $pro->readAll();
?>

	<div class="row">
		<div class="col-md-6 text-left">
			<h4 Class="judul">Penentuan Kategori Tetangga Terdekat</h4>
		</div>
		
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Nama Pasien Lama</th>
                <th>Hasil Nilai Jarak</th>
                <th>Kategori K Ya (K<1) Atau Tidak (K>1)</th>
                <th>Hasil Diagnosa</th>
            </tr>
        </thead>

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>


            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['hasil'] ?></td>
                <td><?php if ($row['hasil'] < 1) {
							$kategori = 'Ya';
							}else{
							$kategori = 'Tidak';
							}
							echo $kategori; 

							$a= $row['id_data_training'];
							$stmtr = $pro->readRDataTraining($a);
							$stmthasil = $pro->readDataTrainingKategori($a);
							$hasil = $stmthasil->fetch(PDO::FETCH_ASSOC);
							$hasil = $kategori;
							$pro->ia = $a;
							$pro->mm = $hasil = $kategori;
							$pro->hasilDataTrainingKategori();?></td>
				<td><?php echo $row['diagnosa'] ?></td>
            </tr>
<?php
}
?>
        </tbody>

    </table>
</div>	
</div>

<div>
<div>
<?php
include_once 'header.php';
include_once 'koneksi/config.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
include_once 'koneksi/koneksi-data-uji.php';
$eks = new DataUji($db);
$eks->id = $id;
$eks->readOne();
include_once 'koneksi/koneksi-data-training.php';
$pro = new DataTraining($db);
$stmt = $pro->readKhusus();
?>
<style>
.judul {
    font-family: impact;
    margin-left: 15px;
    font-size: 25px;
    color: #58a6d0;
}
thead {
    background: #58a6d0;
}
th {
    text-align: center;
    color: white;
}
</style>

<div>
	<div class="row">
		<div class="col-md-6 text-left">
			<h4 Class="judul">Hasil Diagnosa Kejiwaan Pasien Baru</h4>
		</div>
		
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th>Nama Pasien Baru</th>
                <th>Hasil Diagnosa</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td><?php echo $eks->aa; ?></td>
				<td><?php 	$stmtmin = $pro->readDiagnosa();
							$minnr = $stmtmin->fetch(PDO::FETCH_ASSOC);
							echo $hasil_diagnosa = $minnr['h1'];   

							$a= $eks->id;
							$stmtr = $pro->readRDataUji($a);
							$stmthasil = $pro->readRDataUji($a);
							$hasil = $stmthasil->fetch(PDO::FETCH_ASSOC);
							$hasil = $hasil_diagnosa;
							$pro->id = $a;
							$pro->mm = $hasil = $hasil_diagnosa;
							$pro->hasilDataUji();?></td>			
            </tr>

        </tbody>

    </table>
</div>
</div>
</div>

	
