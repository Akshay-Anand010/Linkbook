<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/aa0dc85924.js" crossorigin="anonymous"></script>
    <title></title>
<link rel="stylesheet" href="master.css">
  </head>
  <body>



    <nav class="navbar navbar-expand-lg fixed-top tp">
      <div class="container con">
          <a class="navbar-brand tl">Linkbook</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse justify-content-center mr-6" id="collapsibleNavId">

          <ul class="nav">
            <form class="form-inline my-2 my-lg-0 mr-6 " method="post">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="id1">
<a href="lmb.php" class="btn btn-outline-success my-2 my-sm-0" role="button" name="search">Search</button></a>
          </form>
          </ul>
        </div>
<a href="logout.php" class="btn btn-danger btn-lg justify-content-end pp" role="button">Logout</a>
          </div>
</nav><br>
<section class="home container-fluid my-8">

<div class="row">
<div class="col-lg-4">
  <div class="jumbotron t2">
    <?php
      session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "loginSystem";
    $conn = mysqli_connect($servername, $username, $password, $database);
    $entry_database = "users";
    $y=$_SESSION['uid1'];
    if(isset($_POST['search']))
       {
    $query="SELECT * FROM $entry_database where uidusers=''";
            $query_run=mysqli_query($conn,$query);
  if($query_run) {
  while($row=mysqli_fetch_array($query_run)) {
      ?>
  <h1 class="style-2"><?php echo $row['uidusers'];?></h1>
  <p class="lead">Age:<?php echo $row['uage'];?></p>
  <p class="lead">City:<?php echo $row['city'];?></p>
  <p class="lead">gender:<?php echo $row['gender'];?></p>
  <?php
}
}
else {
  echo "Query failed with error: " . mysqli_error($conn) . "<br>";
}
}
  ?>
  <a href="#" class="btn btn-warning btn-lg justify-content-center">Follow</a>
  </div>
</div>
<div class="col-lg-4">

<div class="jumbotron t5">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "loginSystem";
$conn = mysqli_connect($servername, $username, $password, $database);
$entry_database = "links";
$y=$_SESSION['uid1'];

$query="SELECT * FROM $entry_database where uidusers='id1'";
        $query_run=mysqli_query($conn,$query);
if($query_run) {
while($row=mysqli_fetch_array($query_run)) {
  ?>
<h3><?php echo $row['topic'];?></h3>
<p class="lead"><?php echo $row['ldesp'];?></p>
<p class="lead"><a href='<?php echo $row['llink'];?>'><?php echo $row['llink'];?></a></p>
<?php
}
}
else {
  echo "Query failed with error: " . mysqli_error($conn) . "<br>";
}
  ?>

</div>
</div>
</section>



  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
