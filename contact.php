<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

  require 'vendor/autoload.php';
  
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $services = $_POST['services'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'altruismalerts@gmail.com';  // Gmail ID which you want to use as SMTP server
      $mail->Password = 'sagiqqlmrbssxmuy';  // Gmail Password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;
      $mail->setFrom('altruismalerts@gmail.com');  // Email ID from which you want to send the email
      $mail->addAddress('contact@neophilicsolutions.com');  // Recipient Email ID where you want to receive emails

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message <br>Phone : $phone <br>Services : $services</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thankyou! for contacting us, We will get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="facebook-domain-verification" content="p689n868bid6djiv468lpt1u5zxdgm" />
    <meta name="keywords" content="Neophilic Solutions">
    <meta name="description" content="Neophilic Solutions">
    <meta name="author" content="Neophilic Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <title>Neophilic Solutions</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicons/logo-favicon.ico">
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/css-bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/css-owl.carousel.css">
    <link rel="stylesheet" href="css/css-owl.transitions.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="css/css-animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/css-meanmenu.min.css">
    <!-- font-awesome css -->
	 <!-- Add By Manish4586 <manish4586@codelinaro.org> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/css-themify-icons.css">
    <link rel="stylesheet" href="css/css-flaticon.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="css/css-venobox.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="css/css-magnific.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/css-responsive.css">

    <!-- modernizr css -->
    <script src="js/vendor-modernizr-2.8.3.min.js"></script>
    <style>
        .error {
            color: #ff0101;
        }

        .form-response {
            color: #2ecc00;
            padding: 30px 0;
            text-align: center
        }

        .contact-form input[type="text"] {
            margin-bottom: 5px !important
        }
    </style>
    
    <!-- Meta Pixel Code --> 

    <script> 

    !function(f,b,e,v,n,t,s) 

    {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 

    n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 

    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; 

    n.queue=[];t=b.createElement(e);t.async=!0; 

    t.src=v;s=b.getElementsByTagName(e)[0]; 

    s.parentNode.insertBefore(t,s)}(window, document,'script', 

    'https://connect.facebook.net/en_US/fbevents.js'); 

    fbq('init', '1283184209134791'); 

    fbq('track', 'PageView'); 

    </script> 

    <noscript><img height="1" width="1" style="display:none" 

    src="https://www.facebook.com/tr?id=1283184209134791&ev=PageView&noscript=1" 

    /></noscript> 

    <!-- End Meta Pixel Code --> 
</head>

<body>

    <!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

    <div id="preloader"></div>
    <header class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area fix hidden-xs">
            <div class="container">
                <div class="row">
                    <div class=" col-md-9 col-sm-9">
                        <div class="topbar-left">
                            <ul>

                                <li><a href="#"><i class="fa fa-phone-square"></i> +91 88224 76528</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="top-social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->
        <!-- header-area start -->
        <div id="sticker" class="header-area hidden-xs">
            <div class="container">
                <div class="row">
                    <!-- logo start -->
                    <div class="col-md-3 col-sm-3">
                        <div class="logo">
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll black-logo" href="index.php">
                                <img src="images/logo-logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="header-right-link">
                            <!-- search option start -->
                            <div class="search-inner">

                            </div>
                            <a class="s-menu" href="contact.php#form">Enquiry with us</a>
                        </div>
                        <!-- mainmenu start -->
                        <nav class="navbar navbar-default">
                            <div class="collapse navbar-collapse" id="navbar-example">
                                <div class="main-menu">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="index.php">Home</a>

                                        </li>
                                        <li><a href="about.php">About</a></li>
  <li><a href="gallery.php">Gallery</a></li>
                                        <li><a class="pages" href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="services.php#as">Architecture Design
                                                        &amp; Execution</a></li>
                                                <li><a href="services.php#ha">Home Automations</a></li>
                                                <li><a href="services.php#hr">Home Construction &amp; Repairs</a></li>
                                                <li><a href="services.php#id">Interior Design</a></li>
                                                <li><a href="services.php#landscape">Landscaping</a></li>
                                                <li><a href="services.php#pc">Prefeb Camps</a></li>
                                                <li><a href="services.php#ph">Prefeb Homes</a></li>
                                                <li><a href="services.php#sr">Solar Roof</a></li>

                                            </ul>
                                        </li>

                                        <li><a href="contact.php">Contact us</a></li>
                                        <li><a href="images//NEOPHILIC.pdf" target="_blank"><i class="fa fa-download"></i> Portfolio</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- mainmenu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <div class="logo">
                                <a href="index.php"><img src="/images/logo-logo.png" alt=""></a>
                            </div>
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.php">Home</a>

                                    </li>
                                    <li><a href="about.php">About</a></li>
  <li><a href="gallery.php">Gallery</a></li>
                                    <li><a class="pages" href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.php#as">Architecture Design
                                                    &amp; Execution</a></li>
                                            <li><a href="services.php#ha">Home Automations</a></li>
                                            <li><a href="services.php#hr">Home Construction &amp; Repairs</a></li>
                                            <li><a href="services.php#id">Interior Design</a></li>
                                            <li><a href="services.php#landscape">Landscaping</a></li>
                                            <li><a href="services.php#pc">Prefeb Camps</a></li>
                                            <li><a href="services.php#ph">Prefeb Homes</a></li>
                                            <li><a href="services.php#sr">Solar Roof</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="contact.php">Contact us</a></li>
                                    <li><a href="images//NEOPHILIC.pdf" target="_blank"><i class="fa fa-download"></i> Portfolio</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->
    </header>
    <!-- header end -->
    <!-- Start Bottom Header -->
    <div class="page-area" style="background: url(images/contact.png);">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>Contact</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!-- Start contact Area -->
    <div class="contact-area area-padding">
        <div class="container">
            <div class="row">
                <div class="contact-inner">
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="ti-mobile"></i>
                                <p>
                                    +91 88224 76528
                                    <br><br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="ti-email"></i>
                                <p>
                                    neophilic.solutions@gmail.com
                                    <br><br><br>

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12" id="form">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="ti-location-pin"></i>
                                <p>

                                    <span>C/o Oqtis <br>Arcadia, Garal Tiniali Guwahati <br>Kamrup, Assam - 781017,
                                        India</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Left contact -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <h3>Enquiry with us</h3>
                        <div class="row">
                            <form id="contact-form" action="#" method="POST">
							  <div class="form-group">
								<?= $output; ?>
							  </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                        required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="email form-control" name="email" id="email"
                                        placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone"
                                        required data-error="Please enter your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <select id="services" name="services" class="form-control" required>
                                        <option value="">Select service</option>
                                        <option value="Architecture Design
 &amp; Execution">Architecture Design &amp; Execution</option>
                                        <option value="Home Automations">Home Automations</option>
                                        <option value="Home Construction &amp; Repairs">Home Construction &amp; Repairs
                                        </option>
                                        <option value="Interior Design">Interior Design</option>
                                        <option value="Landscaping">Landscaping</option>
                                        <option value="Prefeb Camps">Prefeb Camps</option>
                                        <option value="Prefeb Homes">Prefeb Homes</option>
                                        <option value="Solar Roof">Solar Roof</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" id="message" rows="7" placeholder="Massage"
                                        class="form-control" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" name="submit" id="submit" class="add-btn contact-btn">Send
                                        Message</button>
                                    <div class="form-response h3 text-center"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
    <!-- Start Footer Area -->
    <!-- <footer class="footer1"> -->


    <!-- Start Footer Area -->
    <footer class="footer1">

        <!-- Start Footer Bottom Area -->
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright">
                            <p>
                                Copyright &copy; 2022
                                <a href="index.php">Neophilic Solutions</a> All Rights Reserved |
                                <a href="about.php">Abount Us |</a>
                                <a href="privacy-policy.php">Privacy Policy |</a>
                                <a href="terms-and-conditions.php">Terms & Conditions</a>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom Area -->
    </footer>
    <!-- End Footer Area -->

    <!-- all js here -->

    <!-- jquery latest version -->
    <script src="js/vendor-jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/4451-js-bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/6564-js-owl.carousel.min.js"></script>
    <!-- Counter js -->
    <script src="js/2007-js-jquery.counterup.min.js"></script>
    <!-- waypoint js -->
    <script src="js/867-js-waypoints.js"></script>
    <!-- magnific js -->
    <script src="js/646-js-magnific.min.js"></script>
    <!-- wow js -->
    <script src="js/8362-js-wow.min.js"></script>
    <!-- venobox js -->
    <script src="js/1148-js-venobox.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/1383-js-jquery.meanmenu.js"></script>
    <!-- Form validator js -->
    <script src="js/3686-js-form-validator.min.js"></script>
    <!-- plugins js -->
    <script src="js/866-js-plugins.js"></script>
    <!-- main js -->
    <script src="js/398-js-main.js"></script>

    <script src="js/1027-validate.js"></script>
    <!--<script src="js/7223-custom.js"></script>-->
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>

</body>

</html>