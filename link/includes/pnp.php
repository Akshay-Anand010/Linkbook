<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Medview</title>
  <link rel="stylesheet" href="main1.css" class="rel">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/aa0dc85924.js" crossorigin="anonymous"></script>

</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top tp">
    <div class="container con">
        <a class="navbar-brand df">Medview</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">

  <a href="#" class="btn btn-outline-warning btn-lg"  data-target="#sign-in" data-toggle="modal" role="button">Login</a>
      </div>
    </div>


  </nav>
<section class="home container-fluid my-6">
<div class="row">
<div class="col-lg-6 mt-5 pl-5 py-5">
  <img src="../ret1.jpeg" alt="" class="img-fiuid">
  <form action="upload_file.php" method="post" enctype="multipart/form-data">
  <label for="file"><span>Filename:</span></label>
  <input type="file" name="file" id="file" />
  <br />
  <input type="submit" name="submit" value="Submit" />
  </form>
  <h1 class="home-class-heading">Doctors Arena</h1>
  <p>Unified Database of Patient’s Medical record.</p>
  <button class="btn btn-primary btn-lg" data-target="#login-modal" data-toggle="modal" role="button" >Join now</button>
</div>

</section>

<div class="modal fade" id="sign-in" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pl" >


<form action="docy1.php" method="post">



<div class="form-group">
 <label for="id" class="col-form-label"><b>Enter your id:</b></label><br>
  <input type="text" name="did" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1 required>

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
----
