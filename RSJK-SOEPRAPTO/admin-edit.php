<?php
include_once 'header.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'koneksi/koneksi-admin.php';
$eks = new Admin($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

    $eks->nl = $_POST['nl'];
    $eks->un = $_POST['un'];
    $eks->pw = md5($_POST['pw']);
    
    if($eks->update()){
        echo "<script>location.href='admin.php'</script>";
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
              <center><h5>Edit Data Admin</h5></center>
            </div>
            
                <form method="post">
                  <div class="form-group">
                    <label for="nl">Nama Admin</label>
                    <input type="text" class="form-control" id="nl" name="nl" value="<?php echo $eks->nl; ?>">
                  </div>
                  <div class="form-group">
                    <label for="un">Username</label>
                    <input type="text" class="form-control" id="un" name="un" value="<?php echo $eks->un; ?>">
                  </div>
                  <div class="form-group">
                    <label for="pw">Password</label>
                    <input type="text" class="form-control" id="pw" name="pw" value="<?php echo $eks->pw; ?>">
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