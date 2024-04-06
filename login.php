<?php
$username=$_POST['username'];
$password=$_POST['password'];
$loket=$_POST['loket'];

if($username=="admin" && $password=="L0ketB2021"){
header('Location: panel/index.php?loket='.$loket);	
}else{
header('Location: index.php');	
}
?>