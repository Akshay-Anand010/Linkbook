<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Medview</title>
  <link rel="stylesheet" href="master1.css" class="rel">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/aa0dc85924.js" crossorigin="anonymous"></script>

</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top tp">
    <div class="container con">
        <a class="navbar-brand df">VR Therapy</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">

  <a href="#" class="btn btn-outline-warning btn-lg"  data-target="#sign-in" data-toggle="modal" role="button">Access Report</a>
      </div>
    </div>


  </nav>
<section class="home container-fluid my-10 mt-10">
  <div class="row my-8 mt-10">
    <h2>Patient requests</h1>
    <?php
    session_start();
    $connection = mysqli_connect("localhost","root","","loginsystem");


    $entry_database = "allow";
    $y2=$_SESSION['ubc'];
    $_SESSION['ub8']=$y2;

    $query="SELECT * FROM $entry_database where did='$y2'";
    $query_run=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($query_run)) {
      ?>

          <div class="card-title my-5">
            <h3 class="display-4 ml-5"><?php echo $row['did'];?></h3>
      <table class="table table-respnsive ml-4">
                      <tr>
                        <td  class="text-muted">Patine unique ref no</td>
                         <td>:</td>
                         <td><?php echo $row['uid'];?></td>
                      </tr>

                    </table>
      <?php

    }


    ?>

    </div>
    </div>
</div>
</section>

<div class="modal fade" id="sign-in" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Access Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >


<form action="docy.php" method="post">


<div class="form-group">
 <label for="id" class="col-form-label"><b>Patient unique id:</b></label><br>
  <input type="text" name="pid" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1 required>

</div>


<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit" name="signin">Access</button>

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
