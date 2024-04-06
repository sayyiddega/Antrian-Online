<!DOCTYPE html>
<?php
include"../config.php";
$loket=$_GET['loket'];
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html lang="en"><head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>?loket=<?=$loket?>'">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../regis/images/bg-heading-03.jpg" width="400" height="200" alt=""/> 
					<br>
					<span class="login100-form-title">
						<?php
						$sql=mysqli_query($koneksi,"select * from loket where kode = '$loket'");
						$row=mysqli_fetch_array($sql);
						?>
						NOMOR ANRIAN LOKET <?=$row['nama']?>
					</span>
					<span class="login100-form-title">
						<?php
						$sql=mysqli_query($koneksi,"SELECT MAX(nomor) AS nomor FROM antrian where loket = '$loket' And tanggal = '$tanggal' And status !='' ");
						$row=mysqli_fetch_array($sql);
						$now=$row['nomor']+1;
						?>
						NOMOR SAAT INI : <?=$now?>
					</span>
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Control Panel Antrian
						<?php
						$sql=mysqli_query($koneksi,"select * from loket where kode = '$loket'");
						$row=mysqli_fetch_array($sql);
						?>
				  		<br>Loket : <?=$row['inisial']?> 
						<?php
						$sql=mysqli_query($koneksi,"SELECT MAX(nomor) AS nomor FROM antrian where loket = '$loket' And tanggal = '$tanggal' And status !='' ");
						$row=mysqli_fetch_array($sql);
						$now=$row['nomor']+1;
						?>Nomor : <?=$now?><br> dari Total : 
						<?php
						$ceknomor=mysqli_query($koneksi,"SELECT MAX(nomor) AS juman FROM antrian where loket = '$loket' And tanggal = '$tanggal'");
						$rcknomor=mysqli_fetch_array($ceknomor);
						echo"$rcknomor[juman]";
						?> Antrian
						<?php
						$ceknm=mysqli_query($koneksi,"select * from antrian where loket = '$loket' And nomor = '$now' And tanggal = '$tanggal'");
						$rcek=mysqli_fetch_array($ceknm);
						?>
						<br>Nama : <?php if($rcek['nama']==""){echo"<strong>Antrian Habis</strong>";$url="#"; $kondisi=1;}else{
						echo"$rcek[nama]"; $url="aksi.php?op=panggil&loket=".$loket."&nomor=".$now; $kondisi=2; }?>
				  </span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<a href="<?=$url?>">
							<button type="button" class="login100-form-btn">
						  <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span> &nbsp; &nbsp;Panggil
						</button>
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<?php
							if($kondisi==1){
						echo"<a href='#'>";	
							}else{
						?>
						<a href="aksi.php?op=lewat&loket=<?=$loket?>&kode=<?=$rcek['kode']?>">
						<?php 
							}
						?>
						
						<button type="button" class="login100-form-btn">
						  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> &nbsp; &nbsp;Lewatkan
						</button>
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<?php
							if($kondisi==1){
						echo"<a href='#'>";	
							}else{
						?>
						<a href="kepuasan.php?loket=<?=$loket?>">
						<?php 
							}
						?>
						
						<button type="button" class="login100-form-btn">
						  <span class="glyphicon glyphicon-send" aria-hidden="true"></span> &nbsp; &nbsp;Akhiri
						</button>
						</a>
					</div>
					
					
					

					

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>