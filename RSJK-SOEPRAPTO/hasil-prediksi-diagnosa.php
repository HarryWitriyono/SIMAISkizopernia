<?php
include_once 'header.php';
include_once 'koneksi/koneksi-data-uji.php';
$pro = new DataUji($db);
$stmt = $pro->readAll();
?>

	<div class="well">
	<div class="row">
        <div class="col-md-6 text-left">
            <h4 class="judul">Data Hasil Diagnosa Pasien Baru</h4>
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
                <td><?php echo $row['nama1'] ?></td>
				<td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['tanggal_lahir'] ?></td>
				<td><?php echo $row['diagnosa'] ?></td>
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