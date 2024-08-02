<html>
  <head>
    <title> Manager Signup | Food Craze </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <body>
   <!-- <button onclick="ScrollTop()" id="myBtn" title="Go back to the top">  <!-- topFunction to ScrollTop, Go back to the top --
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

      function ScrollTop() {                // topFunction to ScrollTop
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script> -->

   <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
         <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand" href="index.php">Food Craze</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li  ><a href="index.php">Home</a></li>
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
     <h1> Greetings Manager, <br> Welcome to <span class="edit"> Food Craze </span></h1>
     <br>
   <p> Create your account</p>   <!-- Creating your account -->
    </div>
    </div>



    <div class="container"> <!--  style="margin-top: 7%; margin-bottom: 2%;" -->
      <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading"> Create Account </div>
        <div class="panel-body">

        <form role="form" action="manager_registered_success.php" method="POST">

          <div class="row">
          <div class="form-group col-xs-10">
            <label for="fullname"><span class="text-danger" ></span> Full Name: </label> <!-- (changed all) style="margin-right: 4px;" -->
            <div class="input-group">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" >  <!-- required="" autofocus=" -->
                <span class="input-group-btn">
                 <label class="btn btn-primary"> <span class="glyphicon glyphicon-user" ></label>  <!-- aria-hidden="true" -->
            </span>
              </span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-10">
            <label for="username"><span class="text-danger" ></span> Username: </label> <!-- (changed all) style="margin-right: 4px;" -->
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Your User Name" > <!--placeholder="Your Full Name" required="" autofocus=" -->
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" ></label> <!-- aria-hidden="true" -->
            </span>
              </span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-10">
            <label for="email"><span class="text-danger" ></span> Email address: </label> <!-- (changed all) style="margin-right: 4px;" -->
            <div class="input-group">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email"  > <!--placeholder="Your Full Name" required="" autofocus=" -->
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" ></label> <!-- aria-hidden="true" -->
            </span>
              </span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-10">
            <label for="contact"><span class="text-danger" ></span> Contact no: </label> <!-- (changed all) style="margin-right: 4px;" -->
            <div class="input-group">
              <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact no" > <!--placeholder="Your Full Name" required="" autofocus=" -->
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" ></span></label> <!-- aria-hidden="true" -->
            </span>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-10">
            <label for="address"><span class="text-danger" ></span> Address: </label> <!-- (changed all) style="margin-right: 4px;" -->
            <div class="input-group">
              <input class="form-control" id="address" type="text" name="address" placeholder="Your address"> <!--placeholder="Your Full Name" required="" autofocus=" -->
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-home" ></label> <!-- aria-hidden="true" -->
            </span>
              </span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-10">
            <label for="password"><span class="text-danger" ></span> Password: </label> <!-- (changed all) style="margin-right: 4px;" -->
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password"> <!--placeholder="Your Full Name" required="" autofocus=" -->
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" ></span></label> <!-- aria-hidden="true" -->
            </span>

            </div>
          </div>
        </div>



        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 4px;"></label> <br>   <!-- or , 4 -->
       <label style="margin-left: 4px;"><a href="managerlogin.php">Already have an account? Login.</a></label>

        </form>

        </div>

      </div>

    </div>
    </div>

    </body>

  <!-- <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Food Exploria 2017 | &copy All Rights Reserved </p>
  <br>
  </footer>    -->
</html>