<?php
//konfigurasi
session_start();
	
ini_set('display_errors',FALSE);
$host="localhost";
$user="u1367722_antrian";
$pass="5marethusen";
$db="u1367722_antrian";

//koneksi 
$koneksi=(mysqli_connect($host, $user, $pass));
mysqli_select_db($koneksi, $db);
$tanggal=date("d-m-Y");

//cek
if ($koneksi)
{
    //echo "berhasil : )";
}else{
    ?><script language="javascript">alert("Gagal Koneksi Database mysql !!")</script><?php
}

?>