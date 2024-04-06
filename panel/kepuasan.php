<!DOCTYPE html>
<?php
include"../config.php";
$loket=$_GET['loket'];
?>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	
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
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
						Kepuasan Pelayanan
						<?php
						$sql=mysqli_query($koneksi,"select * from loket where kode = '$loket'");
						$row=mysqli_fetch_array($sql);
						?>
				  		<br>Loket : <?=$row['inisial']?> 
						<?php
						$sql=mysqli_query($koneksi,"SELECT MAX(nomor) AS nomor FROM antrian where loket = '$loket' And tanggal = '$tanggal' And status !='' ");
						$row=mysqli_fetch_array($sql);
						$now=$row['nomor']+1;
						?>Nomor : <?=$now?>
						<?php
						$ceknm=mysqli_query($koneksi,"select * from antrian where loket = '$loket' And nomor = '$now' And tanggal = '$tanggal'");
						$rcek=mysqli_fetch_array($ceknm);
						?>
						<br>Nama : <?php if($rcek['nama']==""){echo"<strong>Antrian Habis</strong>";$url="#";}else{
						echo"$rcek[nama]"; $url="aksi.php?op=panggil&loket=".$loket."&nomor=".$now; }?>
				  </span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<a href="aksi.php?op=5&kode=<?=$rcek['kode']?>&loket=<?=$loket?>">
							<button type="button" class="login100-form-btn">
						  Sangat Puas &nbsp; &nbsp; <i class='far fa-grin-hearts' style='font-size:28px;color:white'></i>
						</button>
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						
						<a href="aksi.php?op=4&kode=<?=$rcek['kode']?>&loket=<?=$loket?>">
						<button type="button" class="login100-form-btn">
						  Cukup Puas &nbsp; &nbsp; <i class='fas fa-grin-beam' style='font-size:28px;color:white'></i>
						</button>
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<a href="aksi.php?op=3&kode=<?=$rcek['kode']?>&loket=<?=$loket?>">
						<button type="button" class="login100-form-btn">
						 Puas &nbsp; &nbsp; <i class='far fa-grin-alt' style='font-size:28px;color:white'></i>
						</button>
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<a href="aksi.php?op=2&kode=<?=$rcek['kode']?>&loket=<?=$loket?>">
						<button type="button" class="login100-form-btn">
						  Tidak Puas &nbsp; &nbsp; <i class='far fa-frown-open' style='font-size:28px;color:white'></i>
						</button>
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<a href="aksi.php?op=1&kode=<?=$rcek['kode']?>&loket=<?=$loket?>">
						<button type="button" class="login100-form-btn">
						 Sangat Tidak Puas &nbsp; &nbsp; <i class='far fa-angry' style='font-size:28px;color:white'></i>
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