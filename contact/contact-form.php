<?php
    
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE-EMAIL) ){

        //submit the form
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $business_name = $_POST['business'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];
    $message = $_POST['message'];


    $email_from = 'janet@parakaleobookkeeping.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Business: $business_name.\n".
                            "User Phone: $phone.\n".
                                "User Time: $time.\n".
                                    "User Message: $message.\n";

    $to = "troy@joy-bubbles.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");

    $message_sent = true;
    }
}

?>


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Parakaleo Bookkeeping Contact</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <!--<script src="https://use.fontawesome.com/6be4bfbdd1.js"></script>
  -->

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <meta name="theme-color" content="#fafafa">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>

  <header>
   
      <div class="container">

        <div class="too-big">
          <figure class="logo"> 
              <a href="../index.html"> 
              <img src="../img/pi-kappa.white.png" alt="Parakaleo"></a>
          </figure>
       </div>

        <div class="nav-title">
            <a href="../index.html"><h1>Parakaleo</h1></a>
            <h6>Bookkeeping</h6>
        </div>
        <div class="topnav" id="myTopnav">
    
          
          <div class="dropdown">
                <button class="dropbtn">Services
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="../landlord/index.html">Landlords</a>
                  <a href="../flippers/index.html">Flippers</a>
                  <a href="../airbnb/index.html">Airbnb</a>
                </div>
          </div>
          <a href="#">Contact</a>
          <a href="../index.html">Home</a>
          <a href="javascript:void(0);" style="font-size:2em;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

    </div><!-- End of container -->


  </header> <!-- End of header -->

<div class="contact-wrapper">

  <div class="contact-heading">
    <h1>Connect with Parakaleo!</h1>

    <h5>Fill in the information below and click "Submit."</h5>
    <h5>Janet will contact you and arrange a time <br>to speak with you to assess your needs.</h5>

  </div>

  <?php
    if($message_sent):
    ?>
        <h3>Thanks, we'll be in touch</h3>


    <?php
    else: 
    ?>

  <div class="contact-form">
   
      <form id="contact-form" method="post" action="contact-form.php">
          <input name="name" type="text" class="form-control" placeholder="Your Name" required>
          <br>
          <input name="email" type="email" class="form-control" placeholder="Your Email" required>
          <br>
          <input name="business" type="text" class="form-control" placeholder="Your Business Name" required>
          <br>
          <input name="phone" type="text" class="form-control" placeholder="Best Phone Number" required>
          <br>
          <input name="time" type="text" class="form-control" placeholder="Best Time To Call" required>
          <br>

              <textarea name="message" class="form-control" placeholder="Brief description of your business/bookkeeping needs:" rows="8" required></textarea><br>

              <input type="submit" id="contact-submit" class="form-control submit" value="Submit">


      </form>
  
  
  </div>

<?php
endif;
?>

</div><!-- end of contact-wrapper -->

<footer>
  <div class="content-wrapper">
      <div class="footer-content">

        <div class="address">
          <h2>Contact</h2>
          <p>Text or Call</p>
          <p><i class="fa fa-phone"></i> 713-965-4055</p>
          <p><a href="mailto:janet@parakaleobookkeeping.com">
            <i class="fa fa-envelope"></i>
             "janet@parakaleobookkeeping.com"</a>
          </p>
        </div>

        <div class="social-icons">
          <p>
            <a href="https://www.linkedin.com/in/janet-parker-579b3713/" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
          </p>
          <p>
            <a href="https://www.facebook.com/janet2021foryoursuccess/?view_public_for=103540351774967" target="_blank">
              <i class="fa fa-facebook-square"></i>
            </a>
          </p>
         
        </div>
         
      
      </div><!-- end of footer-content -->
  </div><!-- end of content-wrapper -->
</footer><!-- end of footer -->
<script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
      integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

  <script
  type="text/javascript"
  src="https://use.fontawesome.com/releases/v5.15.2/js/conflict-detection.js">
</script>
  <script src="https://use.fontawesome.com/6be4bfbdd1.js"></script>
  <script src="../js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>