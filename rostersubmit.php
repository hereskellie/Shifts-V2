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
    <link rel="icon" href="favicon.ico">

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

      
        <center><img src="company.png" width="750" height="100"></center>
        <h1 class="form-signin-heading"><center>Roster Submitted</center></h1>

<br/>
	<center>
	<form action="roster0702.php">
        <button class="btn btn-lg rosterbuttons1" type="submit">Last Week</button>
    </form>
    <form action="roster2102.php">
        <button class="btn btn-lg rosterbuttons2" type="submit">Next Week</button>
    </form>
    <br/>
    <form action="dayoff.php">
        <button class="btn btn-lg rosterbuttons3" type="submit">Request Day Off</button>
    </form>
    <form action="chat.php">
        <button class="btn btn-lg rosterbuttons4" type="submit">Chat</button>
    </form>
    <form action="shiftchange.php">
        <button class="btn btn-lg rosterbuttons5" type="submit">Request Shift Change</button>
    </form>
    </center>

  <!--trying to get the register button to link to another page. 
  trying to integrate the log in

  u can do it-->

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>