<?php
$loket=$_GET['loket'];
$nomor=$_GET['nomor'];
?>
<style type="text/css">
#bod {
    float: left;
    height: 60mm;
    width: 58mm;
	border: thick;
	border: dashed;
	

}
#but {
   float :left;
   height:40px;
   
}
#badan {
    float:left;
    width :60mm;
    height : auto;
}
#button {
    float:left;
    width :60mm;
    height : 15px;
}
</style>
<div id="badan">
<div id="bod">
<center><br>
<img src="logo.png" width="30px" height="35px"><br>
Nomor Antrian<br>
Kecamatan Binawidya<hr>
<h1>Loket <?=$loket?></h1>
<h1>No.<?=$nomor?></h1>
</center></div>
<div id="but">
<a href="index.php"><button id="button"></button></a>   
</div>
</div>
<script>
		window.print();
</script>


