<?php

session_start();
$con=mysqli_connect("localhost","root","","loginsystem");

$id=$_POST['did'];
 $p=$_SESSION['ub'];

$s = "select * from allow where id= '$id'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  echo "doctor id already present";
}else {
   $reg= "insert into allow(did,uid) values('$id','$p');";
   mysqli_query($con,$reg);
   header("Location:home.php?entry success");
}

 ?>
