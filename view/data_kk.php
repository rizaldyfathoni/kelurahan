<?php
	// https://www.malasngoding.com
	// menghubungkan dengan koneksi database
	include '../database/koneksi.php';
 
	// mengambil data barang
	$data_keluarga = mysqli_query($kon,"SELECT * FROM kartu_keluarga");
 
	// menghitung data barang
	$jumlah_keluarga = mysqli_num_rows($data_keluarga);
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Kartu Keluarga</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body style="overflow-x: scroll; overflow-y: auto;">
	<div id="sideNavigation" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="dashboard.php">Dashboard</a>
		<a href="">Data Kartu Keluarga</a>
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

	 <table border="1">
		<thead>
			<tr>
				<th>Nama Kepala Keluarga</th>
				<th style="padding: 40px">Alamat</th>
				<th style="padding: 5px">RT</th>
				<th style="padding: 5px">RW</th>
				<th style="padding:10px">Kodepos</th>
				<th style="padding: 40px">Nama_Lengkap</th>
				<th>NIK</th>
				<th style="padding: 10px">Jenis_Kelamin</th>
				<th>Tempat_Lahir</th>
				<th>Tanggal_Lahir</th>
				<th>Agama</th>
				<th>Pendidikan</th>
				<th>Pekerjaan</th>
				<th>Gol_Darah</th>
				<th>Status_Perkawinan</th>
				<th>Tanggal_Perkawinan</th>
				<th>Hubungan Dalam Keluarga</th>
				<th>Warganegara</th>
				<th>Nomor_Paspor</th>
				<th>Nomor_Kitap</th>
				<th>Nama_Ayah</th>
				<th>Nama_Ibu</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$data = mysqli_query($kon,"SELECT * FROM kartu_keluarga");
			while($b = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $b['nama_kepala_keluarga']; ?></td>
					<td><?php echo $b['alamat']; ?></td>
					<td><?php echo $b['rt']; ?></td>
					<td><center><?php echo $b['rw']; ?></center></td>
					<td><?php echo $b['kodepos']; ?></td>
					<td><?php echo $b['nama_lengkap']; ?></td>
					<td><?php echo $b['nik']; ?></td>
					<td><center><?php echo $b['jk']; ?></center></td>
					<td><?php echo $b['tempat_lahir']; ?></td>
					<td><?php echo $b['tgl_lahir']; ?></td>
					<td><?php echo $b['agama']; ?></td>
					<td><center><?php echo $b['pendidikan']; ?></center></td>
					<td><?php echo $b['pekerjaan']; ?></td>
					<td><center><?php echo $b['gol_darah']; ?></center></td>
					<td><center><?php echo $b['status_perkawinan']; ?></center></td>
					<td><?php echo $b['tgl_perkawinan']; ?></td>
					<td><center><?php echo $b['hubungan_dlm_keluarga']; ?></center></td>
					<td><?php echo $b['warganegara']; ?></td>
					<td><?php echo $b['no_paspor']; ?></td>
					<td><?php echo $b['no_kitap']; ?></td>
					<td><?php echo $b['nama_ayah']; ?></td>
					<td><?php echo $b['nama_ibu']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>

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