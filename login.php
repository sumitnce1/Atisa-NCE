<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Atisa NCE Chandi</title>
     <meta name="description" content="ATISA-The Technical Fest of NCE (AtisaNCE) Atisa NCE Chandi 2021">
  <meta name="keywords" content="atisance, atisa nce quiz 2021, ATISA, ATISANCE, atisa, atisa nce, nce chandi, ncechandi, nce Techfest, techfest, nloc2020, nceatisa nce atisa, atisa website, sumitnce, sumitnce1 Landing page">
  <meta name="author" content="atisance">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="atisance.ico?" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="socialicon.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="countdown.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
</head>
<body>
    <?php include 'menu.php' ?>
   <!-- <div class="container-fluid" style="background-color:chocolate">-->
   <!--     <div class="navbar-header text-center">-->
   <!--          <a class="navbar-brand" href="index.php" style="color: white;"><h1><img src="ATISA21LOGO.jpg" alt="atisancelogo" style="height: 35px; width: auto;"> <b> ATISA NCE CHANDI</b></h1></a>-->

   <!--     </div>-->
   <!--</div>--><br><br><br>
   <div class="alert alert-info text-center">
        <h1 class=""><b>Login In Here !</b></h1> <a href="index.php" c><label style="font-size: large;">Home</label></a>
   </div>

   <div class="container">

        <div class="row">
             <div class="col-sm-4"></div>
             <div class="col-sm-4 bg-warning">
                  <form action="<?php $_PHP_SELF ?>" method="post">

                       <div class=" form-group"><br>
                            <label><b>Username<font color="red">*</font></b></label>
                            <input type="email" name="emailid" id="emailid" class="form-control" value=""
                                 placeholder="Enter Username" required>
                       </div>
                       <div class="form-group">
                            <label><b> Password<font color="red">*</font></b></label>
                            <input type="password" name="password" id="password" class="form-control" value=""
                                 placeholder="Enter Password" required>
                       </div>

                       <div class="checkbox">
                            <label><b><input type="checkbox" name="rem" value="on" class="form-contorl">Remember
                                 me</b></label>
                       </div>

                       <br>
                       <button type="submit" name="loginbutton" class=" btn btn-primary" style=" width: 60%;"
                            data-toggle="tooltip" title="Login !!"><i class="fa fa-user" aria-hidden="true"></i><b>
                            Log In</b></button>
                       <br><br>
                       <?php
                       if ($error == 1)
                            echo '<div class="alert alert-danger ">
                                 <strong>UserName or Password </strong> is Incorrect.
                                 </div>';
                       ?>

                       <br>
                       <br>
                       <label style=" width: 100%; text-align: right;">Don't have an account?
                            <a href="signup.php" style="color:blue;">Sign up</a>
                            <p>Forget <a href="forgetpassword.php" style="color:blue;">Password?</a></p>
                       </label>

                  </form>

             </div>
             <div class="col-sm-4">
             </div>
        </div>

   </div>
   </div><br><br>


   <?php include './footer.php' ?>
    
</body>
</html>