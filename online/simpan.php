<?php
include"../config.php";
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$kontak=$_POST['kontak'];
$jk=$_POST['jk'];
$kelurahan=$_POST['kelurahan'];
$loket=$_POST['pelayanan'];

mysqli_query($koneksi,"insert into online (nama,nik,kontak,jk,kelurahan)values('$nama','$nik','$kontak','$jk','$kelurahan')");

$sql=mysqli_query($koneksi,"SELECT MAX(nomor) AS nomor FROM antrian where loket = '$loket' And tanggal = '$tanggal'");
$row=mysqli_fetch_array($sql);
$now=$row['nomor']+1;
mysqli_query($koneksi,"insert into antrian (nama,loket,nomor,status,kepuasan,tanggal)values('$nama','$loket','$now','','0','$tanggal')");
$nmlok=mysqli_query($koneksi,"select * from loket where kode = '$loket'");
$rlok=mysqli_fetch_array($nmlok);
header('Location: cetak.php?loket='.$rlok[inisial].'&nomor='.$now);
?>