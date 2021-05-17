<?php

session_start();
 
$form_error = '';
 
if(isset($_POST['submit'])){
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    if($username == 'admin_kelurahan' AND $password == 'admin123'){
 
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    }else{
        $form_error = '*Password atau username yang kamu masukkan salah';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/style_login.css">
</head>
<body>
	<div id="sideNavigation" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="../index.php">Home</a>
	  	<a href="kk.php">Pembuatan Kartu Keluarga</a>
	  	<a href="#">Pembuatan Surat Kelahiran</a>
	  	<a href="#">Pembuatan Surat Kematian</a><br><hr><br>
	  	<a href="gallery.php">Gallery</a>
	  	<a href="">Contact Us</a>
	</div>
 
<nav class="topnav">
	<img src="../image/jakarta.png" style="height: 100px; margin-left: 20px" >
	<img src="../image/Bintaro1.png" style="height: 115px; margin-left: 70%" >
  <a href="#" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
    </svg>
  </a>
</nav>
 
 <div style="margin-top: -100px">
 	<h1><center>
 		KELURAHAN BINTARO
 	</center></h1>
 </div><br><br>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 		<?php
 			if ($form_error!="") {?>
 				<div style="color: red;">
 					<p> <?php echo $form_error; ?> </p>
 				</div>
 		<?php 
 			}
 		?>
		<form method="POST" action="login.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">
 
			<input type="submit" name="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a href="../index.php" class="tombol_back">Kembali</a>
			</center>
		</form>
		
	</div>
</body>
</html>

<script>
	function openNav() {
		document.getElementById("sideNavigation").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
	}
	function closeNav() {
		document.getElementById("sideNavigation").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";
	}
	function konfirmasi(){
		alert('Data berhasil di tambahkan!');history.go(-1);	
	}
</script>