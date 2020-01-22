<?php

session_start();
$con=mysqli_connect("localhost","root","","loginsystem");

$pid=$_POST['pid'];
$did=$_POST['did'];
$y2=$_SESSION['ub8'];
$s = "select * from allow where did= '$y2'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num>=1){
  $con=mysqli_connect("localhost","root","","loginsystem");
   $pid=$_POST['pid'];

  $s = "select * from users where uidusers= '$pid'";

  $result = mysqli_query($con,$s);
  $num=mysqli_num_rows($result);
  if($num==1){
    echo $pid;
   $_SESSION['uid2']= $did;
  $_SESSION['uid1']= $pid;
  header("Location:new.php?access");
}
}else {
   echo "not allowed";
   header("Location:doc.php?notallowedaccess");
}

 ?>
