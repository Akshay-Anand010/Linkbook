<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Linkbook</title>
  <link rel="stylesheet" href="main.css" class="rel">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/aa0dc85924.js" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top tp">
  <div class="container con">
      <a class="navbar-brand df">Linkbook</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"  aria-hidden="true">About us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">services</a>
      </li>
    </ul>
<a href="#" class="btn btn-outline-warning btn-lg"  data-target="#sign-in" data-toggle="modal" role="button">Login</a>
    </div>
  </div>


</nav>
<section class="home container-fluid">
<div class="row">
<div class="col-lg-6 mt-5 pl-5 py-5">
<img src="ret.jpg" alt="" class="img-fiuid">
</div>
<div class="col-lg-6 my-auto px-5">
<h1 class="home-class-heading">This is just a begining</h1>
<p>Londae volu impedit a consequuntur! Odio, possimus!</p>
<button class="btn btn-primary btn-lg" data-target="#login-modal" data-toggle="modal" role="button" >Join now</button>
</div>
</div>
</section>
<section class="about container-fluid">
<div class="row">
<div class="col lg-6 my-auto px-5">
<h2 class="section-heading ">About us</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
   Voluptatum nulla tenetur, velit distinctio tempora quod sunt<br>
    temporibus magnam, doloribus ad molestiae ipsam qui iste? <br>
    Laborum reiciendis omnis aliquid quibusdam vel?</p>
<ul class="nav">
<li class="px-2">
    <a href="https://www.facebook.com/akshaypatnasa"><i class="fa fa-twitter"></i></a>
</li>
<li class="px-2">
    <a href="https://github.com/Andy1998440"><i class="fab fa-github"></i></i></a>
</li>
<li class="px-2">
    <a href="https://www.instagram.com/andy_5821"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</li>
<li class="px-2">
    <a href="www.linkedin.com/in/akshay-anand-98a600149"><i class="fa fa-youtube"></i></a>
</li>
</div>
<div class="col lg-6 my-auto px-5">
  <img src="idu1.jpg" alt="" class="img-fluid">
 </div>
</div>
 </section>
 <section class="pricing  container-fluid">
<div class="ll"><span class="display-1 justify-content-centre">Why Linkbook</span></div>
<div class="row justify-content-centre my-5 justify-content-centre dl">
    <div class="col-sm-3 justify-content-centre pl-1 mx-5 my-2">
      <div class="card cd" style="width: 20rem">
        <img src="idu.jpg" alt="" class="card-img-top ">
      <div class="card-block">
        <h4 class="card-title justify-content-centre">Link Repository</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores?</p>
        <a href="#" class="btn btn-primary">Buy me !</a>
      </div>
      </div>
    </div>
    <div class="col-sm-3 justify-content-centre pl-1 mx-5 my-2">
        <div class="card cd " style="width: 20rem">
          <img src="idu.jpg" alt="" class="card-img-top">
        <div class="card-block">
          <h4 class="card-title justify-content-centre">your on time</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores?</p>
          <a href="#" class="btn btn-info">Buy me !</a>
        </div>
        </div></div>
    <div class="col-sm-3  justify-content-centr pl-1 mx-5 my-2">
      <div class="card cd " style="width: 20rem">
        <img src="idu.jpg" alt="" class="card-img-top">
      <div class="card-block">
        <h4 class="card-title justify-content-centre">Link Synchronisation</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores?</p>
        <a href="#" class="btn btn-primary">Buy me !</a>
      </div>
      </div></div>
    </div>
 </section>
<section class="team container-fluid">

</section>




<!-- forms part -->

<?php
	  if($_SESSION['useruid']!==NULL)
	  {
      echo'<h2>You are Logged in!</h2>
      	  	<form action="includes/logout.php" method="post">
      	  	<input type="submit" name="logout" value="Logout">
              </form>';
      	  }
      	  else
      	  {
echo'<h2>You are Logged out!</h2>

<div class="modal fade" id="login-modal" tabindex="-1" role="form">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div id="div-forms" tabindex="-1" class="pm" >
<form action="includes/signup.php" method="post">
<div class="form-group">
 <label for="uid" class="col-form-label"><b>User id:</b></label><br>
  <input type="text" name="uid" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1 required>
</div>
<div class="form-group">
 <label for="email" class="col-form-label"><b>Email:</b></label><br>
  <input type="email" name="email" class="form-cantrol" id="name" autocomplete="off" required>
</div>
<div class="form-group">
 <label for="uage" class="col-form-label"><b>Age:</b></label><br>
<input type="number" name="uage" class="form-cantrol"  id="age"required>
</div>
<div class="form-group">
 <label for="city" class="col-form-label"><b>City:</b></label><br>
<input type="text" name="city" class="form-cantrol" id="team_name" required>
</div>
<div class="form-group">
 <label for="type" class="col-form-label"><b>gender:</b></label><br>
<select name="gender">
  <option value="male">male</option>
  <option value="female">female</option>
  <option value="others">others</option>
  </select>
</div>
<div class="form-group">
 <label for="pwd" class="col-form-label"><b>Password:</b></label><br>
<input type="password" name="pwd" class="form-cantrol" id="team_name" required>
</div>
<div class="form-group">
 <label for="rpwd" class="col-form-label"><b>Retype-Password:</b></label><br>
<input type="password" name="rpwd" class="form-cantrol" id="team_name" required>
</div>
<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit" name="signup">Sign Up</button>

  </div>

</form>

</div>
</div>
</div>
</div>
</div>

</div>




<!-- sign in -->

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


<form action="includes/signin.php" method="post">


<div class="form-group">
 <label for="id" class="col-form-label"><b>user id or email:</b></label><br>
  <input type="text" name="uid" class="form-cantrol" id="id" maxlength="2" min="1" tabindex=-1 required>
</div>
<div class="form-group">
 <label for="name" class="col-form-label"><b>Password:</b></label><br>
  <input type="password" name="pwd" class="form-cantrol" id="name" autocomplete="off" required>
</div>

<div class="modal-footer">
  <div class="row content-center">
<button class="btn btn-primary btn-lg" type="submit" name="signin">Login</button>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

</div>';

}
	?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
