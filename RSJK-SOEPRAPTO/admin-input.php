<?php
include_once 'header.php';
if($_POST){
    
    include_once 'koneksi/koneksi-admin.php';
    $eks = new Admin($db);

    $eks->nl = $_POST['nl'];
    $eks->un = $_POST['un'];
    $eks->pw = md5($_POST['pw']);

    if($eks->pw == md5($_POST['up'])){
    
    if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="admin.php">lihat semua data</a>.
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

    } else{
?>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Password!</strong> Kata sandi yang anda masukkan tidak sama antara Password dan Ulangi Password
</div>
<?php   
    }
}
?>
        <div class="well">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="page-header">
              <center><h5>Input Data Admin</h5></center>
            </div>
            
                <form method="post">
                  <div class="form-group">
                    <label for="nl">Nama Admin</label>
                    <input type="text" class="form-control" id="nl" name="nl" required>
                  </div>
                  <div class="form-group">
                    <label for="un">Username</label>
                    <input type="text" class="form-control" id="un" name="un" required>
                  </div>
                  <div class="form-group">
                    <label for="pw">Password</label>
                    <input type="password" class="form-control" id="pw" name="pw" required>
                  </div>
                  <div class="form-group">
                    <label for="up">Ulangi Password</label>
                    <input type="password" class="form-control" id="up" name="up" required>
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