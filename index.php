<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_slide.css">
</head>
<body>
	<div id="sideNavigation" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php">Home</a>
	  	<a href="view/kk.php">Pembuatan Kartu Keluarga</a>
	  	<a href="#">Pembuatan Surat Kelahiran</a>
	  	<a href="#">Pembuatan Surat Kematian</a><br><hr><br>
	  	<a href="view/login.php">Login Admin</a>
	  	<a href="view/gallery.php">Gallery</a>
	  	<a href="">Contact Us</a>
	</div>
 
<nav class="topnav">
	<img src="image/jakarta.png" style="height: 100px; margin-left: 20px" >
	<img src="image/Bintaro1.png" style="height: 115px; margin-left: 70%" >
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
 </div><br>
<h1><center>
	Visi dan Misi Pemerintah Provinsi DKI Jakarta
</center></h1><br>

<div class="column1" style="font-size: 20px">
	<h2><center>
		Visi Pemerintah Provinsi DKI Jakarta :
	</center></h2>
	<ul>
		<li>
			Jakarta kota maju, lestari dan berbudaya yang warganya terlibat dalam mewujudkan keberadaban, keadilan dan kesejahteraan bagi semua.
		</li>
	<div class=slider>
		<div class=isi-slider>
			<img src="image/kegiatan/5.jpeg" alt="Gambar 1">
			<img src="image/kegiatan/6.jpeg" alt="Gambar 2">
			<img src="image/kegiatan/9.jpeg" alt="Gambar 3">
			<img src="image/kegiatan/10.jpeg" alt="Gambar 4">
		</div>
	</div>	
	</ul><br>
</div>

<div class="column2" style="margin-top: -600px; font-size: 20px">
	<h2><center>
		Misi Pemerintah Provinsi DKI Jakarta :
	</center></h2>
	<ul>
		<li>
			Menjadikan Jakarta kota yang aman, sehat, cerdas, berbudaya, dengan memperkuat nilai-nilai keluarga dan memberikan ruang kreativitas melalui kepemimpinan yang melibatkan, menggerakkan dan memanusiakan.
		</li><br>
		<li>
			Menjadikan Jakarta kota yang memajukan kesejahteraan umum melalui terciptanya lapangan kerja, kestabilan dan keterjangkauan kebutuhan pokok, meningkatnya keadilan sosial, percepatan pembangunan infrastruktur, kemudahan investasi dan berbisnis, serta perbaikan pengelolaan tata ruang.
		</li><br>
		<li>
			Menjadikan Jakarta tempat wahana aparatur negara yang berkarya, mengabdi, melayani, serta menyelesaikan berbagai permasalahan kota dan warga, secara efektif, meritokratis dan berintegritas.
		</li><br>
		<li>
			Menjadikan Jakarta kota yang lestari, dengan pembangunan dan tata kehidupan yang memperkuat daya dukung lingkungan dan sosial.
		</li><br>
		<li>
			Menjadikan Jakarta ibukota yang dinamis sebagai simpul kemajuan Indonesia yang bercirikan keadilan, kebangsaan dan kebhinekaan.
		</li><br>
	</ul>
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
</script>