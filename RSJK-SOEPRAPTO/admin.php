<?php  
include "header.php";
include_once 'koneksi/koneksi-admin.php';
$pro = new Admin($db);
$stmt = $pro->readAll();
?>
    <div class="well">
    <div class="row">
        <div class="col-md-6 text-left">
            <h4 class="judul">Data Admin</h4>
        </div>
        <div class="col-md-6 text-right">
            <button onclick="location.href='admin-input.php'" class="tombol">Input Baru</button>
        </div>
    </div>
    <br/>
    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Nama Admin</th>
                <th>Username Admin</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $no=1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
            <td><?php echo $no++ ?></td>
    	    <td><?php echo $row['nama_lengkap'] ?></td>
    	    <td><?php echo $row['username'] ?></td>
            <td class="text-center">
                    <a href="admin-edit.php?id=<?php echo $row['id_pengguna'] ?>" class="btn tom">Edit</a>
                    <a href="admin-delete.php?id=<?php echo $row['id_pengguna'] ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini ?')" class="btn tom">Hapus</a>
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