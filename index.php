<!DOCTYPE html>
<?php
include"config.php";
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Sistem Antrian Binawidya</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Selamat Datang Di Sistem Antrian Kecamatan Binawidya</h1>
							<p>Silahkan Aktifkan Kontrol Panel Antrian</p>
							 <a href="tampilan/index.php" target="new"><button class="submit-btn">Tampilan Antrian</button></a>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form action="login.php" method="post">
								<div class="form-group">
									<span class="form-label">Pilih Loket</span>
									<select class="form-control" name="loket">
									<?php
										$sql=mysqli_query($koneksi,"select * from loket order by inisial ASC");
										while($row=mysqli_fetch_array($sql)){
											echo"<option value = '$row[kode]'>$row[nama]</option>";
										}
									?>
										
									</select>
									
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Username</span>
											<input class="form-control" type="text" name="username" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Password</span>
											<input class="form-control" type="password" name="password" required>
										</div>
									</div>
								</div>
								
								<div class="form-btn">
									<button class="submit-btn">Masuk Kontrol Panel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>