    <?php
include('login_m.php'); // Includes Login Script

if(isset($_SESSION['login_user1'])){
header("location: myrestaurant.php"); //Redirecting to myrestaurant Page
}
?>

<!-- <!DOCTYPE html>  -->
<html>

  <head>
    <title> Manager Login | Food Craze </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   

  <body>

  
   <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>  -->

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <!-- <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand" href="index.php">Food Craze</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>

            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
 
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
    <div class="jumbotron">
     <h1>Greetings Manager<br> Welcome to <span class="edit"> Food Craze </span></h1>  <!-- Greetings -->
     <br>
   <p> Please Login to continue</p>  <!-- Please Login to continue -->
    </div>
    </div>

    <div class="container">
      <div class="col-md-5 col-md-offset-3">
        <label ><span> <?php echo $login_error;  ?> </span></label>  <!-- style="margin-left: 5px;color: pink;" -->
      <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-11">
            <label for="username"><span class="text-danger" ></span> Username: </label> <!-- style="margin-right: 5px;" -->
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" >  <!--  required="" autofocus="" -->
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" ></label>   <!-- aria-hidden="true" -->
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-11">
            <label for="password"><span class="text-danger"></span> Password: </label> <!-- style="margin-right: 5px;" -->
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" >  <!--  required="" autofocus="" -->
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" ></span></label>  <!-- aria-hidden="true" -->
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>

          </div>

        </div>
        <label ></label> <br> <!-- or, style="margin-left: 5px;" -->
       <label><a href="managersignup.php">Create a new account</a></label> <!-- style="margin-left: 5px;" -->
       

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
    </body>
</html>