<?php
require 'connection.php';
$email= mysqli_real_escape_string($con, $_POST['email']);
$phone= mysqli_real_escape_string($con, $_POST['phone']);
$name= mysqli_real_escape_string($con, $_POST['name']);
$company= mysqli_real_escape_string($con, $_POST['company']);
$check_email="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
if (!preg_match($check_email, $email))
{
  echo "<script type='text/javascript'>;
  alert('Not a valid email id');
  window.location.href='index.php';
  </script>";
}
$query2="INSERT INTO speakers (email, phone, name, company) VALUES ('$email','$phone','$name','$company')";
$result2=mysqli_query($con, $query2);
if($result2)
{
  echo "<script type='text/javascript'>;
  alert('Successfully Applied');
  window.location.href='index.php';
  </script>";
  header('index.php');
}
else
{
echo "Error loading your page. Try again";
}
?>
