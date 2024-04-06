<?php
include"../config.php";
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Registrasi Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Registrasi Online</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6">
								<div class="contact-wrap w-100 p-lg-5 p-4">
									<h4 class="mb-4"><font color="white">Form Pendaftaran Antrian Online</font></h4>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" action="simpan.php">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="nama" id="name" placeholder="NAMA">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" maxlength="16">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="kontak" id="subject" placeholder="No Tlp/WA">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
										<label style="color: white;">Jenis Kelamin</label>
										<select class="form-control" name="jk" style="background-color: #5b279c;
                                        color: white;">
										<option>Laki-Laki</option>
										<option>Perempuan</option>
										</select>
												</div>
											</div>
										<div class="col-md-12">
												<div class="form-group">
											<label style="color: white;">Kelurahan</label>
										<select class="form-control" name="kelurahan" style="background-color: #5b279c;
                                        color: white;">
										<option>Sungai Sibam</option>
										<option>Binawidya</option>
										<option>Simpang Baru</option>
										<option>Tobek Godang</option>
										<option>Delima</option>
										<option>Lain nya</option>
										</select>
												</div>
											</div>
										<div class="col-md-12">
												<div class="form-group">
										<label style="color: white;">Pelayanan</label>		    
										<select class="form-control" name="pelayanan" style="background-color: #5b279c;
                                        color: white;">
									
                                    <?php
									$sql=mysqli_query($koneksi,"select * from loket order by inisial ASC");
									while($row=mysqli_fetch_array($sql)){
									?>									
                                    <option value="<?=$row['kode']?>"><?=$row['nama']?></option>
									<?php
									}
									?>
										</select>
												</div>
											</div>
										
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="REGISTRASI" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-lg-5 p-4 img">
									<h3>Kecamatan Binawidya</h3>
									<p class="mb-4">Jadwal Pelayanan</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Alamat:</span>Jl HR Soebrantas NO 52</p>
					          </div>
				          </div>
				        	
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>HARI:</span>Senin - Jum'at</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Jam</span>08:00 S/D 16:00</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

