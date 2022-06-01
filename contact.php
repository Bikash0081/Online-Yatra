
<?php
include("function.php"); 
$obj = new busapp();

session_start();
if(isset($_SESSION['id']))
{
$uid = $_SESSION['id'];
$uname = $_SESSION['username'];
}
if(isset($_GET['userlogout']))
   {
      if($_GET['userlogout']=='logout')
      {
         $obj->user_logout();
      }
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Contact Form</title>
   <link rel="stylesheet" href="style/contact.css"/>
   <link rel="stylesheet" href="style/footer.css"/>
   <link rel="stylesheet" href="style/style.css"/>
   <?php include_once("includes/link.php"); ?>
   <script
   src="https://kit.fontawesome.com/64d58efce2.js"
   crossorigin="anonymous"
   ></script>
</head>
<body>
<!-- nav starts here -->
<nav class="navbar navbar-expand-md navbar-light fixed-top scroll-color">
    <a class="navbar-brand" href="index.php"><img style="width:150px" ; src="image/white.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav mr-auto mx-auto text-center ">
        <li class="nav-item mx-4 my-2">
          <a class="nav-link text-uppercase font-weight-bold" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-4 my-2">
          <a class="nav-link text-uppercase font-weight-bold" href="faq.php">FAQ</a>
        </li>
        <li class="nav-item mx-4 my-2">
          <a class="nav-link text-uppercase font-weight-bold" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <?php 
      
      if(isset($uid) == null)
        { ?>
      <div class="signinsignup text-center" id="hello">
        <a class="btn signninbtn px-3 py-2 my-2" href="signinsignup.php">Sign In</a>
      </div>
      <?php         
        }
        else{ ?>
      <div class="dropdown">
        <button class="btn dropdown-toggle my-2" type="button" id="dropdownMenuButton"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img style="width:30px" src="image/usericon.png" alt="usericon"> <?php echo($uname); ?>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="?userlogout=logout">Logout</a>
        </div>
      </div>
      <?php
      }?>
    </div>
  </nav>
<!-- nav ends here -->
<!-- left side of the form starts here -->
   <div class="container">
   <img src="img/shape.png" class="square" alt="" />
   <div class="form">
      <div class="contact-info">
         <h3 class="title">Let's get in touch</h3>
         <p class="text">
         Please Give us your Feedback. Your feedbacks are our strength to improve.
         And Provide you better service.
         </p>

         <div class="info">
         <div class="information">
            <img src="image/location.png" class="icon" alt="" />
            <p>Basundhara, Kathmandu Nepal</p>
         </div>
         <div class="information">
            <img src="image/email.png" class="icon" alt="" />
            <p>onlineyatra@gmail.com</p>
         </div>
         <div class="information">
            <img src="image/phone.png" class="icon" alt="" />
            <p>9874561230</p>
         </div>
         </div>

         <div class="social-media">
         <p>Connect with us :</p>
         <div class="social-icons">
            <a href="#">
               <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
               <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
               <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
               <i class="fab fa-linkedin-in"></i>
            </a>
         </div>
         </div>
      </div>
      <!-- Right side of form starts here -->
      <div class="contact-form">
         <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
               <input type="text" name="name" class="input" />
               <label for="">Username</label>
               <span>Username</span>
            </div>
            <div class="input-container">
               <input type="email" name="email" class="input" />
               <label for="">Email</label>
               <span>Email</span>
            </div>
            <div class="input-container">
               <input type="tel" name="phone" class="input" />
               <label for="">Phone</label>
               <span>Phone</span>
            </div>
            <div class="input-container textarea">
               <textarea name="message" class="input"></textarea>
               <label for="">Message</label>
               <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="submit-btn" />
         </form>
      </div>
   </div>
   </div>
   <!--footer -->
   <div class="container-fluid">
    <div class="row lastpart">
      <h4>© 2022 Online Yatra. All rights reserved. Design and Developed by <a style="color:#e7e7e7" ;
          href="#" target="_blank">Bikash</a></h4>
    </div>
  </div>
   <script src="js/contact.js"></script>
</body>
</html>
