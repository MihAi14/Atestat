<?php
require_once("conectare.php");
$nume=$_POST['nume'];
$email=$_POST['email'];
$message=$_POST['message'];


$cerere="INSERT INTO Preferinte (nume,email,mesaj) VALUES('$nume','$email','$message')";
$rezultat=mysql_query($cerere);
if(!$rezultat)
echo mysql_errno().":".mysql_error();
?>
