<?php
require 'connection.php';


if(isset($_FILES['file'])){
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileType = $_FILES['file']['type'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$sto_name= mysqli_real_escape_string($con, $_POST['sto_name']);
$reg= mysqli_real_escape_string($con, $_POST['reg']);
$approval= mysqli_real_escape_string($con, $_POST['approval']);
$addr= mysqli_real_escape_string($con, $_POST['addr']);
$country= mysqli_real_escape_string($con, $_POST['country']);
$sto_soft= mysqli_real_escape_string($con, $_POST['sto_soft']);
$sto_hard= mysqli_real_escape_string($con, $_POST['sto_hard']);
$industry= mysqli_real_escape_string($con, $_POST['industry']);
$curr_invest= mysqli_real_escape_string($con, $_POST['curr_invest']);
$invest= mysqli_real_escape_string($con, $_POST['invest']);
$percent= mysqli_real_escape_string($con, $_POST['percent']);
$person1= mysqli_real_escape_string($con, $_POST['person1']);
$person2= mysqli_real_escape_string($con, $_POST['person2']);
$person3= mysqli_real_escape_string($con, $_POST['person3']);


for($i=0;$i<count($fileTmpName);$i++){

      $fileExt= explode('.',$fileName[$i]);
      $fileActualext= strtolower(end($fileExt));
      $allowed= array('pdf','doc','docx','jpg','png');

      if(in_array($fileActualext,$allowed)){
        if($fileError[$i] === 0){
          if($fileSize[$i] < 20000000){
            $fileNamenew=uniqid('',true)."."."$fileActualext";
            $fileDestination='uploads/'.$fileName[$i].$sto_name.$fileNamenew;
            move_uploaded_file($fileTmpName[$i],$fileDestination);
            $query2="INSERT INTO pitch (stoname,reg,approval,address,country,stosoft,stohard,industry,currinvest,invest,percent,person1,person2,person3,upload)
            VALUES ('$sto_name','$reg','$approval','$addr','$country','$sto_soft','$sto_hard','$industry','$curr_invest','$invest','$percent','$person1','$person2','$person3','$fileDestination')";
            $result2=mysqli_query($con, $query2);
            if($result2){
            echo "<script type='text/javascript'>;
            alert('Successfully Applied for Pitch');
            window.location.href='index.html';
            </script>";
            header('index.html');
          }
          }else{
            echo "Your file is too big";
          }
        }else{
          echo "there was an error";
        }
      }else{
        echo "You cannot upload files of this type";
      }

    }
  }


?>
