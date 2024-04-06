<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
<head>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>
<body>
<?php
include"../../config.php";
$sql=mysqli_query($koneksi,"select * from panggilan where waktu ='$tanggal' And status ='' And waktu = '$tanggal'");
$cek=mysqli_num_rows($sql);
$row=mysqli_fetch_array($sql);
$loket=mysqli_query($koneksi,"select * from loket where kode = '$row[loket]'");
$rlok=mysqli_fetch_array($loket);
$inisial=$rlok['inisial'];

	$txt="Perhatian Perhatian,, Panggilan Antrian,,".$inisial.",".$row['antrian'].",, Harap Menuju LOKET ,".$inisial;
	$txt=htmlspecialchars($txt);
	$txt=rawurlencode($txt);
	$html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=ID-ID');
	if($cek==0){
		
	}else{
	$player="<audio src='data:audio/mpeg;base64,".base64_encode($html)."' id='my_audio'></audio>";		
	}
	
	
	echo $player;
	

?>
 
  <script type="text/javascript">
    window.onload=function(){
	
	document.getElementById("my_audio").play();
    }
  </script>
<?php
mysqli_query($koneksi,"UPDATE `panggilan` SET `status` = 'ok' WHERE `panggilan`.`kode` = '$row[kode]'");
?>
<center><strong>Sistem Pemanggil Antrian Binawidya</strong>| Harap pastikan halaman ini wajib terbuka, Silahkan Minimize Browser | <br>Apabila Suara tidak keluar :<br> <strong>1. Pastikan Koneksi internet dalam keadaan baik dan stabil ,</strong> <br>2. Silahkan Tutup Halaman ini Lalu buka kembali halaman baru. Terimakasih<br><br> <strong>Nb: Halaman ini hanya diperbolehkan di buka pada mesin antrian! silahkan tutup jika di akses dari luar mesin antrian agar tidak terjadi bentrok pada saat pemanggilan.</strong></center>
</body>
</html>

