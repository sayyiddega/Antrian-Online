<?php
include"../config.php";
$nama=$_POST['nama'];
$loket=$_POST['loket'];
if($nama==""){
    $nama="Tanpa Nama";
}else{
    $nama=$nama;
}
$sql=mysqli_query($koneksi,"SELECT MAX(nomor) AS nomor FROM antrian where loket = '$loket' And tanggal = '$tanggal'");
$row=mysqli_fetch_array($sql);
$now=$row['nomor']+1;

if($loket == 6 && $now <= 45){ 
mysqli_query($koneksi,"insert into antrian (nama,loket,nomor,status,kepuasan,tanggal)values('$nama','$loket','$now','','0','$tanggal')");
$nmlok=mysqli_query($koneksi,"select * from loket where kode = '$loket'");
$rlok=mysqli_fetch_array($nmlok);
header('Location: cetak.php?loket='.$rlok[inisial].'&nomor='.$now);
}else if($loket == 6 && $now >= 46){
header('Location: index.php');   
}
if($loket != 6){ 
mysqli_query($koneksi,"insert into antrian (nama,loket,nomor,status,kepuasan,tanggal)values('$nama','$loket','$now','','0','$tanggal')");
$nmlok=mysqli_query($koneksi,"select * from loket where kode = '$loket'");
$rlok=mysqli_fetch_array($nmlok);
header('Location: cetak.php?loket='.$rlok[inisial].'&nomor='.$now);
}
?>