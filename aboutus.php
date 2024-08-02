<?php
session_start();
?>

<html>

  <head>
    <title> About | Food Craze </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <body>
  
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
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Food Craze</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

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

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="wide">
        
        <div class="tagline">Eat <font color="red"><strong><em>Healthy</em></strong></font>, Be <font color="green"><strong><em>Healthy</em></strong></font></div>
        <h2 style="color: purple"><center>About our Food Craze</center></h2>
        <br>
        <h3 style="color: black">Order food & beverages online from restaurants around you through us. <h3 style="color: black">We are dedicated to bringing you the best culinary experiences from the comfort of your own home. </h3><h3 style="color : black"> Our mission is to provide easy access to a wide range of delicious cuisines, delivered right to your door. </h3><h3 style="color : black"> With a focus on quality, convenience, and exceptional customer service, we aim to make every meal a memorable one. </h3><h3 style="color : black"> There are no minimum order restrictions here! Whether it's a little or a lot, feel free to order as you please. We'll deliver it straight to you! </h3><h3 style="color : black"> Join us on this gastronomic journey and savor the convenience of ordering your favorite dishes with just a few clicks. </h3><h2 style="color : black"> Welcome to our world of flavors!</h2></h3>
        <br>
        <h2 style="color: purple"><center>TERMS AND CONDITIONS</center></h2>
        <br>
        <h4 style="color: black">
             1) Ordering: By placing an order through our online platform, you are agreeing to the terms and conditions set forth by Food Craze. All orders are subject to availability and confirmation of the order price.
        <br> 2) Delivery: We aim to deliver your order within the agreed time frame. However, delivery times may vary due to unforeseen circumstances. Delivery fees are outlined upon checkout. Our delivery service covers around the whole Dhaka.
        <br> 3) Food Quality: We uphold high standards of food quality and strive to provide the best products to our customers. If you have any concerns about the quality of your order, please contact us immediately through our phone or by filling up a contact form.
        <br> 4) Privacy and Data Security: We are committed to protecting your privacy and ensuring the security of your personal information. We handle your data in accordance with our privacy policy.
        <br> 5) Terms of Use: All users of the online ordering platform must comply with the terms of use, which include refraining from any unauthorized use of the platform and ensuring accurate and complete information provided during the ordering process.
        <br> 6) Liability and Disclaimers: Food Craze is not liable for any direct, indirect, or incidental damages arising from the use of our online food ordering system. We reserve the right to make changes to our prices and menus without notice.
        <br> 7) Intellectual Property: All content, trademarks, and intellectual property displayed on the platform are the property of [Your Company Name] and are protected by applicable copyright and trademark laws.
        <br> 8) Governing Law: These terms and conditions are governed by the laws of Bangladesh. Any disputes arising in connection with these terms shall be subject to the exclusive jurisdiction of the courts in Dhaka, Bangladesh.
        <br> 9) Contact Information: If you have any questions or concerns about these terms and conditions, please contact us at 01234567890 or by filling up a contact form </h4>
        <br>
        <h3 style="color: black">By using our Food Craze, you agree to abide by these terms and conditions. </h3>
        <br>
        <br>

    </div>

      <!-- <iframe src="https://www.google.com/maps/place/BRAC+University/@23.7801462,90.4022995,17z/data=!3m1!4b1!4m6!3m5!1s0x3755c7715a40c603:0xec01cd75f33139f5!8m2!3d23.7801463!4d90.4071704!16s%2Fg%2F120vm_vk?entry=ttu" style="width: 250px"></iframe> -->
         </body>
</html>