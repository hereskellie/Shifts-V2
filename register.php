<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Shifts</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="softwareproject.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="backyt.jpg">

    <div class="container">

      <form class="form-signin">
        <center><img src="logo.png" width="330" height="200"></center>
        <h2 class="form-signin-heading"><center>Registration</center></h2>
        <label for="inputName" class="sr-only"></label>
        <input type="name" id="inputName" class="form-control" placeholder="Full Name" required autofocus>
        <label for="inputEmail" class="sr-only"></label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword2" class="sr-only"></label>
        <input type="password" id="inputPassword2" class="form-control" placeholder="Confirm Password" required>
        <label for="inputEmCode" class="sr-only"></label>
        <input type="emcode" id="inputEmCode" class="form-control" placeholder="Employee Code" required>
      </form>
        <form action="roster3101.php" class="form-signin">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
        <form action="index.php" class="form-signin">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Back</button>
        </form>

  <!--trying to get the register button to link to another page. 
  trying to integrate the log in

  u can do it-->

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
