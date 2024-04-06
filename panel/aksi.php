<?php
include"../config.php";
$loket=$_GET['loket'];
$nomor=$_GET['nomor'];
$kode=$_GET['kode'];
$op=$_GET['op'];

if($op=="panggil"){
	mysqli_query($koneksi,"insert into panggilan (loket,antrian,waktu,status)values('$loket','$nomor','$tanggal','')");
	header('Location: index.php?loket='.$loket);
}else if($op=="lewat"){
	mysqli_query($koneksi,"UPDATE `antrian` SET `status` = 'lewat' WHERE `antrian`.`kode` = '$kode'");
	header('Location: index.php?loket='.$loket);
}else if($op=="5"){
	mysqli_query($koneksi,"UPDATE `antrian` SET `status` = 'ok', `kepuasan` = '5'  WHERE `antrian`.`kode` = '$kode'");
	header('Location: index.php?loket='.$loket);
}else if($op=="4"){
	mysqli_query($koneksi,"UPDATE `antrian` SET `status` = 'ok', `kepuasan` = '4'  WHERE `antrian`.`kode` = '$kode'");
	header('Location: index.php?loket='.$loket);;
}else if($op=="3"){
	mysqli_query($koneksi,"UPDATE `antrian` SET `status` = 'ok', `kepuasan` = '3'  WHERE `antrian`.`kode` = '$kode'");
	header('Location: index.php?loket='.$loket);
}else if($op=="2"){
	mysqli_query($koneksi,"UPDATE `antrian` SET `status` = 'ok', `kepuasan` = '2'  WHERE `antrian`.`kode` = '$kode'");
	header('Location: index.php?loket='.$loket);
}else if($op=="1"){
	mysqli_query($koneksi,"UPDATE `antrian` SET `status` = 'ok', `kepuasan` = '1'  WHERE `antrian`.`kode` = '$kode'");
	header('Location: index.php?loket='.$loket);
}


?>