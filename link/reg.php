<?php

session_start();
$con=mysqli_connect("localhost","root","","loginSystem");
$id=$_SESSION['uid1'];
$topic=$_POST['topic'];
$ldesp=$_POST['ldesp'];
$llink=$_POST['llink'];

$s = "select * from links where name= 'links'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  echo "username already taken";
}else {
   $reg= "insert into usertable(uidusers,ldesp,llink,topic) values('$id','$ldesp','$llink','$topic')";
   mysqli_query($con,$reg);
   header("Location:home.php?login=success")
}

 ?>
