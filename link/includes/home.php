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
    <title>Medview</title>
<link rel="stylesheet" href="master.css">
  </head>
  <body>



    <nav class="navbar navbar-expand-lg fixed-top tp">
      <div class="container con">
          <a class="navbar-brand tl">Medview</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse justify-content-center mr-6" id="collapsibleNavId">

          <ul class="nav">
            <form class="form-inline my-2 my-lg-0 mr-6 ">
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
    $_SESSION['ub']=$y;
    $query="SELECT * FROM $entry_database where uidusers='$y'";
            $query_run=mysqli_query($conn,$query);
  if($query_run) {
  while($row=mysqli_fetch_array($query_run)) {
      ?>
  <h1 class="style-2"><?php echo $row['emailusers'];?></h1>
    <p class="lead">Patient id:<?php echo $row['uidusers'];?></p>
  <p class="lead">Age:<?php echo $row['uage'];?></p>
  <p class="lead">City:<?php echo $row['city'];?></p>
  <p class="lead">gender:<?php echo $row['gender'];?></p>
  <?php
}
}
else {
  echo "Query failed with error: " . mysqli_error($conn) . "<br>";
}
  ?>
  <a href="#" class="btn btn-warning btn-lg justify-content-center"  data-target="#allow" data-toggle="modal" role="button">Allow Access</a>
  </div>
</div>
<div class="col-lg-4">
<a href="#" class="btn btn-outline-secondary btn-lg my-5 mb-2"  data-target="#sign" data-toggle="modal" role="button">Add link</a>
<div class="jumbotron t5">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "loginSystem";
$conn = mysqli_connect($servername, $username, $password, $database);
$entry_database = "links";
$y=$_SESSION['uid1'];
if(isset($_POST['search']))
   {
   $_SESSION['ubc']=id1;
     require "lmb.php";
}
$query="SELECT * FROM $entry_database where uidusers='$y'";
        $query_run=mysqli_query($conn,$query);
if($query_run) {
while($row=mysqli_fetch_array($query_run)) {
  ?>

            <div class="card-title my-5">
              <h3 class="display-4 ml-5"><?php echo $row['topic'];?></h3>
        <table class="table table-respnsive ml-4">
                        <tr>
                          <td  class="text-muted">description</td>
                           <td>:</td>
                           <td><?php echo $row['ldesp'];?></td>
                        </tr>
                        <tr>
                          <td  class="text-muted">link</td>
                           <td>:</td>
                           <td><?php echo $row['llink'];?></td>
                        </tr>
                      </table>

<?php
}
}
else {
  echo "Query failed with error: " . mysqli_error($conn) . "<br>";
}
  ?>

</div>
<h3><I>Comments by doctor</I></h3>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "loginSystem";
$conn = mysqli_connect($servername, $username, $password, $database);
$entry_database = "comments";
$y=$_SESSION['uid1'];
if(isset($_POST['search']))
   {
   $_SESSION['ubc']=id1;
     require "lmb.php";
}
$query="SELECT * FROM $entry_database where uidusers='$y'";
        $query_run=mysqli_query($conn,$query);
if($query_run) {
while($row=mysqli_fetch_array($query_run)) {
  ?>
<h5><?php echo $row['cm'];?></h5>

<?php
}
}
else {
  echo "Query failed with error: " . mysqli_error($conn) . "<br>";
}
  ?>
</div>
</section>
<div class="modal fade" id="sign" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Add a Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >
<form action="reg.php" method="post">
<div class="form-group">
 <label for="id" class="col-form-label"><b>Hospital name:</b></label><br>
  <input type="text" name="topic" class="form-cantrol" id="id" tabindex=-1 required>
</div>
<div class="form-group">
 <label for="name" class="col-form-label"><b>prescription:</b></label><br>
  <input type="text" name="ldesp" class="form-cantrol" id="name" autocomplete="off" required>
</div>
<div class="form-group">
 <label for="name" class="col-form-label"><b>prescription no:</b></label><br>
  <input type="text" name="pid" class="form-cantrol" id="name" autocomplete="off" required>
</div>
<div>
<label for="name" class="col-form-label"><b>drive link:</b></label><br>
 <input type="url" name="llink" class="form-cantrol" id="name" autocomplete="off" required>
</div>
<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit" name="add">Add</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="modal fade" id="allow" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Allow access</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >
<form action="al.php" method="post">
<div class="form-group">
 <label for="id" class="col-form-label"><b>Doctor Identification code:</b></label><br>
  <input type="number" name="did" class="form-cantrol" id="id" tabindex=-1 required>
</div>

<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit" name="add">Add</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>


  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
