<?php
$con=mysqli_connect("Localhost", "capiplac", "sKGH7CvuoyrF", "capiplac_exchange") or die(mysqli_error($con));
/*$con=mysqli_connect("localhost", "root", "", "sto") or die(mysqli_error($con));*/
if(!isset($_SESSION))
{session_start();}
?>
