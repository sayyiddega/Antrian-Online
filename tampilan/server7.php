<?php 
include("../config.php");
$sql=mysqli_query($koneksi,"SELECT MAX(nomor) AS nomor FROM antrian where loket = '7' And tanggal = '$tanggal' And status !=''");
$row=mysqli_fetch_array($sql);
$now=$row['nomor']+1;
$sql2=mysqli_query($koneksi,"select * from loket where kode = '7'");
$row2=mysqli_fetch_array($sql2);
?>

<table width="100%" border="0">
  <tbody>
    <tr>
      <td align="center"><strong><font color="white">KONTER 
      <?=$row2['nama']?> (<?=$row2['inisial']?>)</strong></td>
    </tr>
    <tr>
      <td align="center"><strong><font color="white">NOMOR ANTRIAN SAAT INI : 
        <?=$now?>
      </strong></td>
    </tr>
  </tbody>
</table>