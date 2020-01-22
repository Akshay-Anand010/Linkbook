<?php

session_start();
$con=mysqli_connect("localhost","root","","loginsystem");

$cm=$_POST['cm'];
$y=$_SESSION['ub1'];

$s = "select * from comments where id= '$y'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  echo "doctor id already present";
}else {
   $reg= "insert into comments(cm,uidusers) values('$cm','$y');";
   mysqli_query($con,$reg);
   header("Location:new.php?entry success");
}

 ?>
