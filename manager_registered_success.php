<html>

  <head>
    <title> Manager Login | Food Craze </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/manager_registered_success.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <!-- <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> -->
          </button>
          <a class="navbar-brand" href="index.php">Food Craze</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>

<?php

require 'connection.php';
$database = Connect();  //database

$fullname = $database->real_escape_string($_POST['fullname']);   //database
$username = $database->real_escape_string($_POST['username']); //database
$email = $database->real_escape_string($_POST['email']); //database
$contact = $database->real_escape_string($_POST['contact']); //database
$address = $database->real_escape_string($_POST['address']);
$password = $database->real_escape_string($_POST['password']); //database

$query = "INSERT into MANAGER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."')";
$success_operation = $database->query($query); //database

if (!$success_operation ){
	die("Could not enter the data".$database->error); //Could not enter the data, database
}

$database->close();

?>


<div class="container">
	 <div class="jumbotron" style="text-align: center;">
		<h1> <?php echo "Welcome $fullname!" ?> </h1>   <!-- h1 -->
		<h2>Your account has been created.</h2> <!-- h2 -->
		<p>Login now from <a href="managerlogin.php">here</a></p> <!-- here -->
	</div>
</div>

    </body>
</html>