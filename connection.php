<?php
$con=mysqli_connect("Localhost", "bengfhtq", "CFHw2yiXQ1lb", "bengfhtq_capitalexchange_database") or die(mysqli_error($con));
/*$con=mysqli_connect("localhost", "root", "", "roadshow") or die(mysqli_error($con));*/
if(!isset($_SESSION))
{session_start();}
?>
