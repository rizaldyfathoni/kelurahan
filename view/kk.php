<!DOCTYPE html>
<html>
<head>
	<title>Pembuatan Kartu Keluarga</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
	
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

 	<h1><center>
 			Pendaftaran Kartu Keluarga
 	</center></h1>
	
	<form action="../controller/simpan-data.php" method="POST">
		<div class="column3">
		 	<tr>
		 		<td>
		 			<label>Nama Kepala Keluarga </label><br>
		 			<input type="text" size="38" name="kepala_keluarga" placeholder="Nama Lengkap">
		 		</td><br><br>
		 		<td>
		 			<label>Alamat </label><br>
		 			<textarea name="alamat" rows="5" cols="40" placeholder="Masukan Alamat"></textarea>
		 		</td><br><br>
		 		<td>
		 			<label>RT</label>
		 			<input type="text" name="rt" size="5">
		 		</td>
		 		<td>
		 			<label>RW</label>
		 			<input type="text" name="rw" size="5">
		 		</td><br><br>

		 		<td>
		 			<label>Kode Pos </label>
		 			<input type="text" name="kodepos" size="5">
		 		</td><br><br>
		 		<td>
		 			<label>Nama Lengkap </label><br>
		 			<input type="text" size="38" name="nama_lengkap" placeholder="Nama Lengkap">
		 		</td><br><br>
		 		<td>
		 			<label>NIK</label><br>
		 			<input type="text" size="38" name="nik" placeholder="Masukan NIK">
		 		</td><br><br>
		 		<td>
		 			<label>Jenis Kelamin:</label>
                        <select name="jk">
                            <option>Pilih</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                    </select><br><br>
		 		</td>
		 		<td>
		 			<label>Tempat Lahir</label><br>
		 			<input type="text" size="38" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
		 		</td><br><br>
		 		<td>
		 			<label>Tanggal Lahir</label><br>
		 			<input type="text" size="38" name="tgl_lahir" placeholder="yyyy / mm / dd">
		 		</td><br><br>
		 		<td>
		 			<label>Agama</label><br>
		 			<input type="text" size="38" name="agama" placeholder="Masukan Agama">
		 		</td><br><br>
		 	</tr>
		 </div>
		 <div class="column4">
		 	<tr>
		 		<td>
		 			<label>Pendidikan</label><br>
		 			<input type="text" size="38" name="pendidikan" placeholder="Masukan Pendidikan">
		 		</td><br><br>
		 		<td>
		 			<label>Pekerjaan</label><br>
		 			<input type="text" size="38" name="pekerjaan" placeholder="Masukan Pekerjaan">
		 		</td><br><br>
		 		<td>
		 			<label>Golongan Darah</label><br>
		 			<input type="text" size="7" name="gol_darah">
		 		</td><br><br>
		 		<td>
		 			<label>Status Perkawinan</label>
                        <select name="status_perkawinan">
                            <option>Pilih</option>
                            <option value="Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                    </select><br><br>
		 		</td>
		 		<td>
		 			<label>Tanggal Perkawinan</label><br>
		 			<input type="text" size="38" name="tgl_nikah" placeholder="yyyy / mm / dd">
		 		</td><br><br>
		 		<td>
		 			<label>Hubungan Dalam Keluarga</label><br>
		 			<input type="text" size="38" name="hubungan">
		 		</td><br><br>
		 		<td>
		 			<label>Warganegara</label><br>
		 			<input type="text" size="38" name="warga">
		 		</td><br><br>
		 		<td>
		 			<label>No Paspor</label><br>
		 			<input type="text" size="38" name="paspor" placeholder="Masukan No Paspor">
		 		</td><br><br>
		 		<td>
		 			<label>No Kitap</label><br>
		 			<input type="text" size="38" name="kitap" placeholder="Masukan No Kitap">
		 		</td><br><br>
		 		<td>
		 			<label>Nama Ayah </label><br>
		 			<input type="text" size="38" name="nama_ayah" placeholder="Nama Lengkap Ayah">
		 		</td><br><br>
		 		<td>
		 			<label>Nama Ibu </label><br>
		 			<input type="text" size="38" name="nama_ibu" placeholder="Nama Lengkap Ibu">
		 		</td><br><br>
		 	</tr>
		 	<button type="submit" name="submit" onclick="konfirmasi()" style="font-size: 20px; width: 100px">
		 		Daftar
		 	</button>
		 </div>
	</form>

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