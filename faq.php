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
if(isset($_POST['submit']))
{
    $frominfo = $_POST["fromroute"];
    $toinfo = $_POST["toroute"];
    $dateinfo =$_POST["dateroute"];
    $result1 = $obj->bushow("SELECT * FROM add_bus WHERE from_route ='$frominfo' AND to_route ='$toinfo' AND bus_date ='$dateinfo'");
    $result = $obj->bushow("SELECT * FROM add_bus WHERE from_route ='$frominfo' AND to_route ='$toinfo' AND bus_date ='$dateinfo'");
}

?>

<?php include_once("includes/link.php"); ?>
<link rel="stylesheet" href="style/style.css"/>
<link rel="stylesheet" href="style/faq.css">
<link rel="stylesheet" href="style/footer.css">
<!--Section: FAQ-->
<!-- nav starts here -->
<body>
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
        <a class="nav-link text-uppercase font-weight-bold" href="#faq">FAQ</a>
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
<div class="container">
<section>
  <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ</h3>
  <p class="text-center mb-5">
    Find the answers for the most frequently asked questions below
  </p>

  <div class="row">
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> How to book tickets?</h6> 
      <p>
        <strong><u>Tickets can be booked in 4 steps. </u></strong> 
        First you have to search bus by putting location and date of travel.
        Second select bus. 
        Third select seats and boarding point.
        Fourth, Print ticket.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-pen-alt text-primary pe-2"></i> Can I cancel the booking?</h6>
      <p>
        <strong><u>Yes, You can! </u></strong>booking can be canceled with valid reasons.
      You can either call in customer service or fill contact form. Cancellation should be done before 6 hours.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> Do I need to register?
      </h6>
      <p>
        Yes the users have to register by filling forms and log in to the system in order to book ticket.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> What are the advantages of booking seats?
      </h6>
      <p> <strong><u>Here are the advantages</u>.</strong>
        You can choose your seat
        You can book your bus tickets online, by phone, or in person
        You can choose from over 100 bus operators
        You can choose from buses based on boarding points, timing and bus type
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i> Is there full refund policy?
      </h6>
      <p> We do not issue full or partial refunds for any
        reason.</p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-book-open text-primary pe-2"></i> Does booking online cost me more? </h6>
      <p>
        Not at all! The price of the bus ticket is the same as you would get from the bus operator too.The price of hotel voucher is the same or sometimes discounted depending on the season/time.
      </p>
    </div>
  </div>
</section>
</div>
<div class="container-fluid">
    <div class="row lastpart">
      <h4>© 2022 Online Yatra. All rights reserved. Design and Developed by <a style="color:#e7e7e7" ;
          href="#" target="_blank">Bikash</a></h4>
    </div>
  </div>
</body>
<!--Section: FAQ-->
