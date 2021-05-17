<?php

include "../database/koneksi.php";

$kepala_keluarga=$_POST["kepala_keluarga"];
$alamat=$_POST["alamat"];
$rt=$_POST["rt"];
$rw=$_POST["rw"];
$kodepos=$_POST["kodepos"];
$nama_lengkap=$_POST["nama_lengkap"];
$nik=$_POST["nik"];
$jk=$_POST["jk"];
$tempat_lahir=$_POST["tempat_lahir"];
$tgl_lahir=$_POST["tgl_lahir"];
$agama=$_POST["agama"];
$pendidikan=$_POST["pendidikan"];
$pekerjaan=$_POST["pekerjaan"];
$gol_darah=$_POST["gol_darah"];
$status_perkawinan=$_POST["status_perkawinan"];
$tgl_nikah=$_POST["tgl_nikah"];
$hubungan=$_POST["hubungan"];
$warga=$_POST["warga"];
$paspor=$_POST["paspor"];
$kitap=$_POST["kitap"];
$nama_ayah=$_POST["nama_ayah"];
$nama_ibu=$_POST["nama_ibu"];


  $sql="INSERT INTO kartu_keluarga(nama_kepala_keluarga,alamat,rt,rw,kodepos,nama_lengkap,nik,jk,tempat_lahir,tgl_lahir,agama,pendidikan,pekerjaan,gol_darah,status_perkawinan,tgl_perkawinan,hubungan_dlm_keluarga,warganegara,no_paspor,no_kitap,nama_ayah,nama_ibu) VALUES('$kepala_keluarga','$alamat','$rt','$rw','$kodepos','$nama_lengkap','$nik','$jk','$tempat_lahir','$tgl_lahir','$agama','$pendidikan','$pekerjaan','$gol_darah','$status_perkawinan','$tgl_nikah','$hubungan','$warga','$paspor','$kitap','$nama_ayah','$nama_ibu')";

// if(!$kon ){
// 	echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
// 	} else{
// 		echo "<script>alert('Data berhasil di tambahkan!');history.go(-1);</script>";
// 	  	$kon -> close();
// 	}

if (!$kon->query($sql)) {
	$msg = "Error description: ".$kon -> error;
	echo $msg;
	} else {
	// echo "<script>alert('Data berhasil di tambahkan!');history.go(-1);</script>";
 		header("location: ../index.php");
	}
	$kon -> close();
?>