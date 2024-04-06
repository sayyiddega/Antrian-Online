<?php
include"../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Pendaftaran Antrian</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	 <link rel="stylesheet" href="lib/css/jkeyboard.css">
	
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading" style="width: 800px;"></div>
                <div class="card-body">
                  <h2 class="title"><center>REGISTRASI&nbsp;ANTRIAN BINAWIDYA</center></h2>
                  <form method="POST" action="simpan.php">
                  
				  <div class="input-group">
							<input type="text" class="input--style-3" placeholder="Tuliskan Nama Anda" name="nama" id="search_field">
					<div id="keyboard"></div>


					<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
					<script src="lib/js/jkeyboard.js"></script>
					<script>
						$('#keyboard').jkeyboard({
							layout: "english_capital",
							input: $('#search_field'),
							customLayouts: {
								selectable: ["english_capital"],
								english_capital: [
									['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P',],
									['A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L',],
									['Z', 'X', 'C', 'V', 'B', 'N', 'M', '\'', '.'],
									['space', '-', 'backspace']
									],
							}
						});
					</script>  
				  </div>
				<div class="input-group">
              <div class="rs-select2 js-select-simple select--no-search">
                                <select name="loket">
								
                                    <?php
									$sql=mysqli_query($koneksi,"select * from loket");
									while($row=mysqli_fetch_array($sql)){
									?>									
                                    <option value="<?=$row['kode']?>"><?=$row['nama']?></option>
									<?php
									}
									?>
									
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>                      
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Daftar Antrian</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->