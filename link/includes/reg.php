<?php

session_start();
$con=mysqli_connect("localhost","root","","loginSystem");
$id=$_SESSION['ub'];
$topic=$_POST['topic'];
$ldesp=$_POST['ldesp'];
$llink=$_POST['llink'];
$pid=$_POST['pid'];
$s = "select * from links where uidusers= 'id'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);

   $reg= "insert into links(uidusers,ldesp,llink,topic,pid) values('$id','$ldesp','$llink','$topic','$pid')";
   mysqli_query($con,$reg);
   header("Location:home.php?add=success")


 ?>
