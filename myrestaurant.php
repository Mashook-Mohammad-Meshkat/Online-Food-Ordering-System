<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php');
}
?>

<html>
  <head>
    <title> Manager Login | Food Craze </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/myrestaurant.css">
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
          </button>
          <a class="navbar-brand" href="index.php">Food Craze</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">Manager control panel </a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>

<div class="container">
    <div class="jumbotron">
     <h1>Hello, Dear Manager! </h1>
     <p> You can manage all of your restaurants from here</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">

    	</div>
    </div>
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="myrestaurant.php" class="list-group-item active">My Restaurant</a>
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
    		  <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
    	</div>
    </div>

    <div class="col-xs-8">
      <div class="form-area" >
        <form action="myrestaurant1.php" method="POST">
        <br>
          <h2 style="text-align: center;""> My Restaurant</h2>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Restaurant's Name">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Restaurant's Email" >
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Restaurant's Contact Number" >
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" placeholder="Restaurant's Address" >
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> Add Restaurant </button>
      </div>
        </form>
     </div>
   </div>
</div>
  </body>
</html>