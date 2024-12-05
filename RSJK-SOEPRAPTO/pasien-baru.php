<?php
include_once 'header.php';
include_once 'koneksi/koneksi-data-uji.php';
$pro = new DataUji($db);
$stmt = $pro->readAll();
?>

	<div class="well">
	<div class="row">
        <div class="col-md-6 text-left">
            <h4 class="judul">Data Diagnosa Pasien Baru</h4>
        </div>
        <div class="col-md-6 text-right">
            <button onclick="location.href='pasien-baru-input.php'" class="tombol">Input Baru</button>
        </div>
    </div>
	<br/>
	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
                <th>Gejala Komunikasi</th>
                <th>Gejala Halusinasi</th>
                <th>Gejala Suasana Hati</th>
                <th>Gejala Kosentrasi</th>
                <th>Gejala Gangguan Tidur</th>
                <th>Gejala Sosialisasi</th>
                <th>Mood</th>
                <th>Gangguan Persepsi, Memori Dan Integensi</th>
                <th>Perhatian Keluarga</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama1'] ?></td>
				<td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['tanggal_lahir'] ?></td>
				<td><?php if ($row['g11'] == 1) {
                        $g1 = 'Kesulitan Berkomunikasi';
                        } else {
                        $g1 = 'Tidak Ada Gejala'; }
                        echo $g1; ?></td>

                <td><?php if ($row['g22'] == 1) {
                        $g2 = 'Memiliki Gangguan Halusinasi';
                        } else {
                        $g2 = 'Tidak Ada Gejala'; }
                        echo $g2; ?></td>

                <td><?php if ($row['g33'] == 1) {
                        $g3 = 'Memiliki Gangguan Suasana Hati';
                        } else {
                        $g3 = 'Tidak Ada Gejala'; }
                        echo $g3; ?></td>

                <td><?php if ($row['g44'] == 1) {
                        $g4 = 'Memiliki Gangguan Konsentrasi';
                        } else {
                        $g4 = 'Tidak Ada Gejala'; }
                        echo $g4; ?></td>
                
                <td><?php if ($row['g55'] == 1) {
                        $g5 = 'Memiliki Gangguan Tidur';
                        } else {
                        $g5 = 'Tidak Ada Gejala'; }
                        echo $g5; ?></td>
                
                <td><?php if ($row['g66'] == 1) {
                        $g6 = 'Tidak Dapat Bersosialisasi';
                        } else {
                        $g6 = 'Tidak Ada Gejala'; }
                        echo $g6; ?></td>
                
                <td><?php if ($row['g77'] == 1) {
                        $g7 = 'Mood Labil Atau Datar';
                        } else {
                        $g7 = 'Tidak Ada Gejala'; }
                        echo $g7; ?></td>
                
                <td><?php if ($row['g88'] == 1) {
                        $g8 = 'Terganggu';
                        } else {
                        $g8 = 'Tidak Ada Gejala'; }
                        echo $g8; ?></td>
                
                <td><?php if ($row['g99'] == 1) {
                        $g9 = 'Tidak Diperhatikan';
                        } else {
                        $g9 = 'Diperhatikan'; }
                        echo $g9; ?></td>

                <td class="text-center">
                    <a href="pasien-baru-prediksi-diagnosa.php?id=<?php echo $row['id_data_uji'] ?>" class="btn tom">Diagnosa</a>
					<a href="pasien-baru-edit.php?id=<?php echo $row['id_data_uji'] ?>" class="btn tom">Edit</a>
					<a href="pasien-baru-delete.php?id=<?php echo $row['id_data_uji'] ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini ?')" class="btn tom">Hapus</a>
			    </td>
            </tr>
<?php
}
?>
        </tbody>

    </table>
<style>
button{
  display: block;
  margin: 0 auto;
  width: 260px;
  height: 36px;
  border-radius: 30px;
  color: #fff;
  font-size: 15px;
  cursor: pointer;
}
.tombol{
  margin-top: 5px;
  margin-bottom: 30px;
  text-transform: uppercase;
  font-weight: 600;
  margin-left: 270px;
  font-family: 'Nunito', sans-serif;
  background: -webkit-linear-gradient(left, #58a6d0, #58a6d0);
  border-color: white;
}

.tombol:hover{
  background: -webkit-linear-gradient(right, #a0d2f5, #a0d2f5);
  border-color: white;
}
.judul {
    font-family: impact;
    margin-left: 15px;
    font-size: 25px;
    color: #58a6d0;
}
.tom {
    font-family: 'Nunito', sans-serif;
    color: white;
    background: -webkit-linear-gradient(left, #58a6d0, #58a6d0);
    margin-bottom: 5px;
    width: 80px;
}
.tom:hover {
    background: -webkit-linear-gradient(right, #a0d2f5, #a0d2f5);
}
thead {
    background: #58a6d0;
}
th {
    text-align: center;
    color: white;
}
</style>		