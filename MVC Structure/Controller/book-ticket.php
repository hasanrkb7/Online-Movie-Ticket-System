<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema World | Book Tickets</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="form/css/util.css">
  <link rel="stylesheet" type="text/css" href="form/css/main.css">
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#"><h1><span>Cinema World</span></h1></a></div>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.html" class="active"><h4>Home</h4></a></li>
            <li><a href="about-us.html"><h4>About</h4></a></li>
            <li class="last"><a href="contact-us.html"><h4>Contacts</h4></a></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h3>Book Your <b>Favourite</b> <span>Movie Ticket</span></h3>
                <p class="p1">Numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
              </div>
            </div>
          </div>
        </div>
          <div class="container-contact100">
    <div class="wrap-contact100">
	
      <form class="contact100-form validate-form" action="booking.php" method="post">
        <span class="contact100-form-title">
          Book Your Ticket
        </span>

        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
          <span class="label-input100"> NAME </span>
          <input class="input100" type="text" name="name" placeholder="Enter Your Name">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
          <span class="label-input100"> Email </span>
          <input class="input100" type="text" name="email" placeholder="Enter Your Email ">
        </div>

        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Phone</span>
          <input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
        </div>

        
        <?php
            $db = mysqli_connect('localhost', 'root', '', 'online_booking_ticket');
            $id = $_REQUEST['id'];
            $query = "SELECT * FROM movie WHERE mve_id=$id" ;
            $results = mysqli_query($db, $query);
            $list = mysqli_fetch_assoc($results);
          ?>
      

        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Movie Date</span>
          <input class="input100" type="text" name="date" placeholder="<?php echo $list['date']?>" disabled>
        </div>
        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Movie Time</span>
           <input class="input100" type="text" name="time" placeholder="<?php echo $list['time']?>" disabled>
        </div>
		    
		 <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Amount</span>
           <input class="input100" type="text" name="amount" placeholder="<?php echo $list['price']?>" disabled>
        </div>
		
		 <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Credit Card Number</span>
           <input class="input100" type="text" name="cardnumber" placeholder="cardnumber">
        </div>




        

           
        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn">
            <span>
               <a href = "lastPage\indexx.html" >Submit </a>
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
			  
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
        </div>
      </div>
      <div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf">Copyright &copy; 2018 <a href="#">Cinema World</a> - All Rights Reserved</p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>