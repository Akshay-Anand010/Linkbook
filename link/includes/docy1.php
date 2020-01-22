<?php

session_start();
$con=mysqli_connect("localhost","root","","loginsystem");

$pid=$_POST['pid'];
$did=$_POST['did'];
$_SESSION['ubc']=$did;
$s = "select * from allow where did= '$did'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num>=1){

  header("Location:doc.php?access");
   echo $did;
}else {
   echo "not allowed";
   header("Location:doc1.php?notallowedaccess");
}

 ?>
