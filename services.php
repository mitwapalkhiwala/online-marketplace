<?php

    include_once 'gpConfig.php';
    $authUrl = $gClient->createAuthUrl();
    if (!isset($_SESSION['allowed'])){
        header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    }
    if(isset($_GET['code'])){
    	$gClient->authenticate($_GET['code']);
    	$_SESSION['token'] = $gClient->getAccessToken();
    	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
    }
    if (isset($_SESSION['token'])) {
	    $gClient->setAccessToken($_SESSION['token']);
	    $_SESSION["allowed"]=true;
	    $gpUserProfile = $google_oauthV2->userinfo->get();
	    $email=$gpUserProfile['email'];
	    setcookie("email",$email);
	    setcookie("allowed",True);
	   // $_COOKIE["email_id"]=$gpUserProfile['gender'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Techiesta-Advancement through Technology</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/techiesta.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/techiesta.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/techiesta.png">
        <link rel="apple-touch-icon-precomposed" href="images/techiesta.png">
        <link rel="shortcut icon" href="images/techiesta.png">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/techiesta.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="http://www.mitwapalkhiwala.com/#service">Go Back</a></li>
				
			    <li><a href="http://www.mitwapalkhiwala.com/Logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
            
        </div>
        
        <div class="section primary-section">
            <div class="triangle"></div>
            <div class="container">
                           <!-- Start title section -->
                <div class="title">
                    <h1>What We Do?</h1>
                    <!-- Section's title goes here -->
                    
                    <!--Simple description for section goes here. -->
                </div>
                <div class="">
                    <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/ecommerce.php">  
                                <img class="img-circle" src="images/ecommerce.png" alt="service 1" >
                            </a>
                            </div>
                            <h3 style="color:#fff;">eCommerce Development</h3>
                            </div>
                    </div>
                        <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/iot.php">
                                    <img class="img-circle" src="images/Service3.png" alt="service 1">
                                    </a>
                            </div>
                            <h3 style="color:#fff;">IoT Development</h3>
                           
                        </div>
                    </div>
                    <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/webdevelopment.php">
                                <img class="img-circle" src="images/Service2.png" alt="service 2" />
                            </a>    
                            </div>
                            <h3 style="color:#fff;">Website Development</h3>
                           
                        </div>
                    </div>
                    <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/webdesign.php">
                                <img class="img-circle" src="images/webdesign.png" alt="service 3">
                            </a>
                            </div>
                            <h3 style="color:#fff;">Web Design</h3>
                      
                        </div>
                    </div>
                     <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/android.php">
                                <img class="img-circle" src="images/android-logo.jpg" alt="service 1">
                            </a>
                            </div>
                            <h3 style="color:#fff;">Android Apps Development</h3>
                          
                        </div>
                    </div>
                        <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/ios.php">
                                <img class="img-circle" src="images/apple.png" alt="service 1">
                            </a>
                            </div>
                            <h3 style="color:#fff;">iOS Apps Development</h3>
                            
                        </div>
                    </div>
                    <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/graphic.php">
                                <img class="img-circle" src="images/graphic.png" alt="service 2" />
                            </a>
                            </div>
                            <h3 style="color:#fff;">Graphic Design</h3>
                            
                        </div>
                    </div>
                    <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/uiux.php">
                                <img class="img-circle" src="images/uiux.png" alt="service 3">
                            </a>
                            </div>
                            <h3 style="color:#fff;">UI/UX Design</h3>
                          
                        </div>
                    </div>
                     <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/content.php">
                                <img class="img-circle" src="images/content.jpg!d" alt="service 1">
                            </a>
                            </div>
                            <h3 style="color:#fff;">Content Creation</h3>
                            
                        </div>
                    </div>
                        <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/marketing.php">
                                <img class="img-circle" src="images/market.jpg" alt="service 1">
                            </a>
                            </div>
                            <h3 style="color:#fff;">Content Marketing</h3>
                        </div>
                    </div>
                             			
                                </div>
        </div>
 </div>
         
         </div>
                    <!-- Footer section start -->
        <div class="footer">
             <p>All the product names / logo / images and / or company names used herein may be protected as trademarks of their respective owners.</p>
            <p>&copy; 2019 Mitwa Palkhiwala</a>, <a href="http://mitwapalkhiwala.com/">Techiesta</a></p>
        </div>
        
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>



