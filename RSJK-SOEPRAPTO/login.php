<?php
include_once 'koneksi/koneksi.php';

$config = new Config();
$db = $config->getConnection();
	
if($_POST){
	
	include_once 'koneksi/koneksi-login.php';
	$login = new Login($db);

	$login->userid = $_POST['username'];
	$login->passid = md5($_POST['password']);
	
	if($login->login()){
		echo "<script>location.href='home.php'</script>";
	}
	
	else{
		echo "<script>alert('Username Dan Password Yang Anda Masukkan Salah !!!')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSJK SOEPRAPTO BENGKULU</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="images/login.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>

  <div class="cont">
  <img src="images/back.png">
    <div class="form sign-in">
	<label>
	<span></span>
  </label>
  </div>

    <div class="sub-cont" >
      <div class="img">
        <div class="img-text m-in">
          <h3>Halaman Login</h3>
          <p>Silakkan Masukkan Username Dan Password</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Masuk</span>
          <span class="m-in">Kembali</span>
        </div>
      </div>
      <div class="form sign-up">
	  <br>
		</br>
    <section class="join-main-section">
      <h2 class="join-text">
        <center><span class="accent-text">Admin Login</span></center>
      </h2>
      <br>
      <form class="join-form" method="post">
        <div class="input-group">
        <label for="InputUsername1"><span>Username</span></label>
        <br>
		<center><input  type="text" class="form-control" name="username"  id="InputUsername1" placeholder="Username"></center>
        </div>

        <div class="input-group">
          <label for="InputPassword1"><span>Password</Span></label>
            <br>
		<center><input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password"></center>
        </div>
        <button type="submit" class="submit">Login</button>
        </div>
      </form>
    </section>
        </div>

      
      </div>
	  
    </div>
	
  </div>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>