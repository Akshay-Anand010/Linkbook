<?php

require "connection.php";
if(isset($_POST['signin']))
{

    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];

    if(empty($uid) || empty($pwd))
	{
		header("Location:../index.php?error=Fillallthedetails");
		exit();
	}
	else
	{
		$sql="SELECT * FROM users where uidusers='$uid';";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
    if($resultcheck>0)
  		{
  			if($row=mysqli_fetch_assoc($result))
  			{
  				// $pwdcheck=password_verify($pwd,$pwdusers);
  				if($pwd !== $row['pwdusers'])
  				{
            // echo $uid;
            // echo $pwd;

  					header("Location:../index.php?error=1passwordincorrect");
  		            exit();
  				}
  				else if($pwd === $row['pwdusers'])
  				{
                      session_start();
                      $_SESSION['uid1']= $row['uidusers'];
                      $_SESSION['userid']= $row['idusers'];
                      header("Location:home.php?login=success");
  		            exit();
  				}
  				else{
  					header("../index.php?error=1passwordincorrect");
  		            exit();
  				}
  			}
  		}
  else
  {
  	header("Location:../index.php?error=ClicktoSignup");
  	exit();
  }
}}
