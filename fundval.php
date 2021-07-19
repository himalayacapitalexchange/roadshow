<?php
require 'connection.php';
$name= mysqli_real_escape_string($con, $_POST['name']);
$surname= mysqli_real_escape_string($con, $_POST['surname']);
$des= mysqli_real_escape_string($con, $_POST['des']);
$acc_fund= mysqli_real_escape_string($con, $_POST['acc_fund']);
$fund_size= mysqli_real_escape_string($con, $_POST['fund_size']);
$jur= mysqli_real_escape_string($con, $_POST['jur']);
$ticket= mysqli_real_escape_string($con, $_POST['ticket']);
$portfolio= mysqli_real_escape_string($con, $_POST['portfolio']);
$crypto= mysqli_real_escape_string($con, $_POST['crypto']);
$addr= mysqli_real_escape_string($con, $_POST['addr']);
$geo= mysqli_real_escape_string($con, $_POST['geo']);
$contactno= mysqli_real_escape_string($con, $_POST['contactno']);
$email= mysqli_real_escape_string($con, $_POST['email']);
$ass_email= mysqli_real_escape_string($con, $_POST['ass_email']);
$ass_no= mysqli_real_escape_string($con, $_POST['ass_no']);
$check_email="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
if (!preg_match($check_email, $email))
{
  echo "<script type='text/javascript'>;
  alert('Not a valid email id');
  window.location.href='funds.php';
  </script>";
}
if (!preg_match($check_email, $ass_email))
{
  echo "<script type='text/javascript'>;
  alert('Not a valid email id');
  window.location.href='funds.php';
  </script>";
}
$query2="INSERT INTO funds (name, surname, designation, accrediation, fundsize, jurisdiction, ticket,portfolio,crypto,address,geo,contactno,email,assistantemail,assistantno) VALUES ('$name','$surname','$des','$acc_fund','$fund_size','$jur','$ticket','$portfolio','$crypto','$addr','$geo','$contactno','$email','$ass_email','$ass_no')";
$result2=mysqli_query($con, $query2);

if($result2)
{
  echo "<script type='text/javascript'>;
  alert('Your Application is received');
  window.location.href='index.html';
  </script>";
}
else
{
echo "Error loading your page. Try again";
}
?>
