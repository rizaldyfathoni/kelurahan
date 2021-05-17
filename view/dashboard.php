<?php

include "../database/koneksi.php";

session_start();
 
// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)
if( empty($_SESSION['username']) ){
    header('Location: login.php');
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/style_grid.css">
</head>
<body>
	<div id="sideNavigation" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="dashboard.php">Dashboard</a>
		<a href="data_kk.php">Data Kartu Keluarga</a>
	  	<a href="../index.php">Logout</a>
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

	 <section class="grid-1">
		<div class="item-1">
		  	<center>Jumlah Kartu Keluarga<br><br>
		  		<?php
		  			$data_keluarga = mysqli_query($kon,"SELECT * FROM kartu_keluarga");
		  			$jumlah_keluarga = mysqli_num_rows($data_keluarga);
		  		?>
		  		<?php echo $jumlah_keluarga; ?>
		  	</center>
		</div>

		<div class="item-2">
		  	<center>Jumlah Orderan Kemarin<br><br>
		  	</center>
		</div>

		<div class="item-3">
			<center>Jumlah Orderan Hari ini<br><br>
			</center>
		</div>

		<div class="item-4">
			<center>Jumlah Orderan Belum Diproses<br><br>
			</center>
		</div>
		  
		<div class="item-5">
			<center>Jumlah Orderan Sedang Diproses<br><br>
			</center>
		</div>

		<div class="item-6">
			<center>Jumlah Orderan Selesai<br><br>
			</center>
		</div>
	</section>


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