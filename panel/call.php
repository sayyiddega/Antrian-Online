<?php
include"../config.php";
$sql=mysqli_query($koneksi,"select * from panggilan where waktu ='$tanggal' And status =''");
$cek=mysqli_num_rows($sql);
$row=mysqli_fetch_array($sql);
$loket=mysqli_query($koneksi,"select * from loket where kode = '$row[loket]'");
$rlok=mysqli_fetch_array($loket);
$teks="Panggilan Antrian,,".$rlok['inisial'].$row['antrian'].",, Harap Menuju LOKET ,".$rlok[inisial];
?>
<html>
<head>
 <title>speak text to speech with Resvonsive Voice</title>
 <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
 <script type="text/javascript">

  responsiveVoice.OnVoiceReady = function() {
   console.log("speech time?");
   
   responsiveVoice.speak(
	   "Antrian Nomor",
	   "Indonesian Female",
  {
   pitch: 1, 
   rate: 0.8, 
   volume: 1
  }
 );
};
 </script>
</head>
<body>
</body>
</html>
<?php
//mysqli_query($koneksi,"UPDATE `panggilan` SET `status` = 'ok' WHERE `panggilan`.`kode` = '$row[kode]'");
?>