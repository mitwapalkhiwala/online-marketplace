<?php 
session_start();
if(!isset($_COOKIE["all_companies_visited_pages"])){
    $count_all=0;
    setcookie("count_all",$count_all);
    setcookie("all_companies_visited_pages[0]","abc");
  }
?><!DOCTYPE html>
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
                            <li class="active"><a href="#home">Home</a></li>
                              <li><a href="#about">About</a></li>
                            <li><a href="http://www.mitwapalkhiwala.com/services.php">Services</a></li>
                            <li><a href="#portfolio">News</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#marketplace">Marketplace</a></li>
			   
                      	    <?php
				  if (isset($_SESSION['token'])) {
           			     echo "<li><a href='http://www.mitwapalkhiwala.com/Logout.php'>Logout</a></li>";
            		          }else
			          {
			             echo "<li><a href='http://www.mitwapalkhiwala.com/services.php'>Login</a></li>";
                                  }
			   ?>
			    
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
            
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Techiesta</h2>
                        <h4>Your ideas, our Creation!</h4>
                        <p>Got great ideas?<br>
                           Share your ideas with us and let us turn them into a real product.
                            <br></p>
                        
                        <div class="da-img">
                            <img src="images/Slider0001.png" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Techiesta</h2>
                        <h4>Grow your business by going online</h4>
                        <p>
                          Go online and let the world know your works. 
                          Get in touch and let's collabrate to bring you online!
                        </p>
                        <div class="da-img">
                            <img src="images/Slider002.png" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <!--<div class="da-slide">-->
                    <!--    <h2>Revolution</h2>-->
                    <!--    <h4>Customizable</h4>-->
                    <!--    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>-->
                    <!--    <a href="#" class="da-link button">Read more</a>-->
                    <!--    <div class="da-img">-->
                    <!--        <img src="images/Slider03.png" width="320" alt="image03">-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- About us section start -->
        <div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>Who We Are?</h1>
                    
                </div>
                <div class="row-fluid team">
                    <div class="span4" id="first-person">
                        <div class="thumbnail">
                            <img src="images/mitwa.png" alt="team 1">
                            <h3>Mitwa Palkhiwala</h3>
                            <!--<ul class="social">-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-facebook-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-twitter-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-linkedin-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--</ul>-->
                            <div class="mask">
                                <h2>Founder & CEO </h2>
                                <p>She did Bachelors of Technology in Electronics & Communication Engineering. She is pursuing Masters in Computer Engineering from San Jose State University. Her interests lie in innovative projects in the field of Information Technology and Internet of Things. </p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="second-person">
                        <div class="thumbnail">
                            <img src="images/mihir.png" alt="team 1">
                            <h3>Mihir Palkhiwala</h3>
                            <!--<ul class="social">-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-facebook-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-twitter-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-linkedin-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--</ul>-->
                            <div class="mask">
                                <h2>CTO</h2>
                                <p>He is 18 years young leader and pursuing his Bachelors of Technology in Computer Science & Engineering. His interests are in the field of Mobile & Web Application Development and Machine Learning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">
                            <img src="images/maulik.png" alt="team 1">
                            <h3>Maulik Palkhiwala</h3>
                            <!--<ul class="social">-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-facebook-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-twitter-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="">-->
                            <!--            <span class="icon-linkedin-circled"></span>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--</ul>-->
                            <div class="mask">
                                <h2>Company Advisor</h2>
                                <p>He is a Civil Engineer and has more than 25 years of experience in managing a company. He is creative and likes to experiment with new things. He wants to bring a change in the society by his works and hence he is the best person to guide the younger fellows in handling the company. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-text centered">
                    <h3>About Us</h3>
                    <p>Techiesta was started in 2016 by an enthusiastic tech geek, Ms. Mitwa Palkhiwala and a young techie, Mr. Mihir Palkhiwala under the guidance of company advisor, Mr. Maulik Palkhiwala. At Techiesta, we are dedicated to bring solutions to everyday problems faced by millions of people all over the world. We have expertise in the areas of Internet of Things, Embedded Systems, and Web & Mobile Applications Development. We have successfully delivered more than 25 fully functional products to our happy customers. We are based in Ahmedabad, India and San Jose, California.</p>
                </div>
                <!--<h3>Skills</h3>-->
                <!--<div class="row-fluid">-->
                <!--    <div class="span6">-->
                <!--        <ul class="skills">-->
                <!--            <li>-->
                <!--                <span class="bar" data-width="80%"></span>-->
                <!--                <h3>Graphic Design</h3>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--                <span class="bar" data-width="95%"></span>-->
                <!--                <h3>Html & Css</h3>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--                <span class="bar" data-width="68%"></span>-->
                <!--                <h3>jQuery</h3>-->
                <!--            </li>-->
                <!--            <li>-->
                <!--                <span class="bar" data-width="70%"></span>-->
                <!--                <h3>Wordpress</h3>-->
                <!--            </li>-->
                <!--        </ul>-->
                <!--    </div>-->
                    <!--<div class="span6">-->
                        <!--<div class="highlighted-box center">-->
                        <!--    <h1>We're Hiring</h1>-->
                        <!--    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ullamcorper suscipit lobortis nisl ut aliquip consequat. I learned that we can do anything, but we can't do everything...</p>-->
                        <!--    <button class="button button-sp">Join Us</button>-->
                        <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- About us section end -->
        <!--<div class="section secondary-section">-->
        <!--    <div class="triangle"></div>-->
        <!--    <div class="container centered">-->
        <!--        <p class="large-text">Elegance is not the abundance of simplicity. It is the absence of complexity.</p>-->
        <!--        <a href="#" class="button">Purshase now</a>-->
        <!--    </div>-->
        <!--</div>-->
       
        <!-- Newsletter section start -->
        <!--<div class="section third-section">-->
        <!--    <div class="container newsletter">-->
        <!--        <div class="sub-section">-->
        <!--            <div class="title clearfix">-->
        <!--                <div class="pull-left">-->
        <!--                    <h3>Newsletter</h3>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div id="success-subscribe" class="alert alert-success invisible">-->
        <!--            <strong>Well done!</strong>You successfully subscribet to our newsletter.</div>-->
        <!--        <div class="row-fluid">-->
        <!--            <div class="span5">-->
        <!--                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>-->
        <!--            </div>-->
        <!--            <div class="span7">-->
        <!--                <form class="inline-form">-->
        <!--                    <input type="email" name="email" id="nlmail" class="span8" placeholder="Enter your email" required />-->
        <!--                    <button id="subscribe" class="button button-sp">Subscribe</button>-->
        <!--                </form>-->
        <!--                <div id="err-subscribe" class="error centered">Please provide valid email address.</div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Newsletter section end -->
        
        <!-- Service section start -->
        <div class="section secondary-section" id="service" >
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
                            <h3>eCommerce Development</h3>
                            </div>
                    </div>
                        <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/iot.php">
                                    <img class="img-circle" src="images/Service3.png" alt="service 1">
                                    </a>
                            </div>
                            <h3>IoT Development</h3>
                           
                        </div>
                    </div>
                    <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/webdevelopment.php">
                                <img class="img-circle" src="images/Service2.png" alt="service 2" />
                            </a>    
                            </div>
                            <h3>Website Development</h3>
                           
                        </div>
                    </div>
                    <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/webdesign.php">
                                <img class="img-circle" src="images/webdesign.png" alt="service 3">
                            </a>
                            </div>
                            <h3>Web Design</h3>
                      
                        </div>
                    </div>
                     <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/android.php">
                                <img class="img-circle" src="images/android-logo.jpg" alt="service 1">
                            </a>
                            </div>
                            <h3>Android Apps Development</h3>
                          
                        </div>
                    </div>
                        <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/ios.php">
                                <img class="img-circle" src="images/apple.png" alt="service 1">
                            </a>
                            </div>
                            <h3>iOS Apps Development</h3>
                            
                        </div>
                    </div>
                    <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/graphic.php">
                                <img class="img-circle" src="images/graphic.png" alt="service 2" />
                            </a>
                            </div>
                            <h3>Graphic Design</h3>
                            
                        </div>
                    </div>
                    <div class="span2">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/uiux.php">
                                <img class="img-circle" src="images/uiux.png" alt="service 3">
                            </a>
                            </div>
                            <h3>UI/UX Design</h3>
                          
                        </div>
                    </div>
                     <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/content.php">
                                <img class="img-circle" src="images/content.jpg!d" alt="service 1">
                            </a>
                            </div>
                            <h3>Content Creation</h3>
                            
                        </div>
                    </div>
                        <div class="span2" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.mitwapalkhiwala.com/marketing.php">
                                <img class="img-circle" src="images/market.jpg" alt="service 1">
                            </a>
                            </div>
                            <h3>Content Marketing</h3>
                        </div>
                    </div>
                  <div class="span5" align="center" style="margin-left:5%;">
                        <div class="centered service">
                           	<div class="circle-border zoom-in" style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/tracking.php">
                                Click here to view the services you visited in the Marketplace
                            </a>
                            </div>			
                         </div>
 			<div class="centered service">
                           	<div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/mostVisitedMarket.php">
                                Click here to view 5 most visited services in the Marketplace
                            </a>
                            </div>			
                         </div>
				<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/top5Market.php">
                                Click here to view 5 most rated services on Marketplace
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/popular_arpit.php">
                                Click here to view 5 most visited services on OneCall Pro
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/popular_sneha.php">
                                Click here to view 5 most visited services on Techies Town
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/top5techiestown.php">
                                Click here to view 5 most rated services on Techies Town
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/top5learnaid.php">
                                Click here to view 5 most rated services on The Learn Aid Inc
                            </a>
                            </div>
                          </div>

                    </div>
                     <div class="span5" align="center" style="margin-left:8%;">
                        <div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/popular.php">
                                Click here to view 5 most visited services on Techiesta
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/top5techiesta.php">
                                Click here to view 5 most rated services on Techiesta
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/popular_rohit.php">
                                Click here to view 5 most visited services on Bhagyadeep Tours and Travels
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/popular_sagar.php">
                                Click here to view 5 most visited services on The Learn Aid Inc
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/top5bhagyadeep.php">
                                Click here to view 5 most rated services on Bhagyadeep Tours and Travels
                            </a>
                            </div>
                          </div>
			<div class="centered service">
                            <div class="circle-border zoom-in"  style="padding:10px;">
                            <a href="http://www.mitwapalkhiwala.com/top5onecall.php">
                                Click here to view 5 most rated services on OneCall Pro
                            </a>
                            </div>
                          </div>

                    </div>
                    </div>
            </div>
        </div>
        <!-- Service section end -->
        <!-- Portfolio section start -->
        <div class="section primary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Techiesta in News</h1>
                    <p>Check out our achievements on Media</p>
                </div>
                <!--<ul class="nav nav-pills">-->
                <!--    <li class="filter" data-filter="all">-->
                <!--        <a href="#noAction">All</a>-->
                <!--    </li>-->
                <!--    <li class="filter" data-filter="web">-->
                <!--        <a href="#noAction">Web</a>-->
                <!--    </li>-->
                <!--    <li class="filter" data-filter="photo">-->
                <!--        <a href="#noAction">Photo</a>-->
                <!--    </li>-->
                <!--    <li class="filter" data-filter="identity">-->
                <!--        <a href="#noAction">Identity</a>-->
                <!--    </li>-->
                <!--</ul>-->
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/media1.png" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Our project in a local newspaper</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    
                                    
                                        <span>Date</span>May 2016
                                   
                                    
                                </div>
                                <p>Our project was broadcast on various local news papers and news channels.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/media02.png" alt="project 2">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Indian Patent Publication of our project</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                  
                                        <span>Date</span>July 2016</div>
                                    
                                </div>
                                <p>We have a pending Indian patent application and our patent was published in the Indian Patent Journal.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <!--<div id="slidingDiv2" class="toggleDiv row-fluid single-project">-->
                    <!--    <div class="span6">-->
                    <!--        <img src="images/Portfolio03.png" alt="project 3">-->
                    <!--    </div>-->
                    <!--    <div class="span6">-->
                    <!--        <div class="project-description">-->
                    <!--            <div class="project-title clearfix">-->
                    <!--                <h3>Webste for Some Client</h3>-->
                    <!--                <span class="show_hide close">-->
                    <!--                    <i class="icon-cancel"></i>-->
                    <!--                </span>-->
                    <!--            </div>-->
                    <!--            <div class="project-info">-->
                    <!--                <div>-->
                    <!--                    <span>Client</span>Some Client Name</div>-->
                    <!--                <div>-->
                    <!--                    <span>Date</span>July 2013</div>-->
                    <!--                <div>-->
                    <!--                    <span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                    <!--                <div>-->
                    <!--                    <span>Link</span>http://examplecomp.com</div>-->
                    <!--            </div>-->
                    <!--            <p>How far you go in life depends on your being tender with the young, compassionate with the aged, sympathetic with the striving and tolerant of the weak and strong. Because someday in your life you will have been all of these.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- End details for portfolio project 3 -->
                    <!-- Start details for portfolio project 4 -->
                    <!--<div id="slidingDiv3" class="toggleDiv row-fluid single-project">-->
                    <!--    <div class="span6">-->
                    <!--        <img src="images/Portfolio04.png" alt="project 4">-->
                    <!--    </div>-->
                    <!--    <div class="span6">-->
                    <!--        <div class="project-description">-->
                    <!--            <div class="project-title clearfix">-->
                    <!--                <h3>Project for Some Client</h3>-->
                    <!--                <span class="show_hide close">-->
                    <!--                    <i class="icon-cancel"></i>-->
                    <!--                </span>-->
                    <!--            </div>-->
                    <!--            <div class="project-info">-->
                    <!--                <div>-->
                    <!--                    <span>Client</span>Some Client Name</div>-->
                    <!--                <div>-->
                    <!--                    <span>Date</span>July 2013</div>-->
                    <!--                <div>-->
                    <!--                    <span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                    <!--                <div>-->
                    <!--                    <span>Link</span>http://examplecomp.com</div>-->
                    <!--            </div>-->
                    <!--            <p>Life's but a walking shadow, a poor player, that struts and frets his hour upon the stage, and then is heard no more; it is a tale told by an idiot, full of sound and fury, signifying nothing.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- End details for portfolio project 4 -->
                    <!-- Start details for portfolio project 5 -->
                    <!--<div id="slidingDiv4" class="toggleDiv row-fluid single-project">-->
                    <!--    <div class="span6">-->
                    <!--        <img src="images/Portfolio05.png" alt="project 5">-->
                    <!--    </div>-->
                    <!--    <div class="span6">-->
                    <!--        <div class="project-description">-->
                    <!--            <div class="project-title clearfix">-->
                    <!--                <h3>Webste for Some Client</h3>-->
                    <!--                <span class="show_hide close">-->
                    <!--                    <i class="icon-cancel"></i>-->
                    <!--                </span>-->
                    <!--            </div>-->
                    <!--            <div class="project-info">-->
                    <!--                <div>-->
                    <!--                    <span>Client</span>Some Client Name</div>-->
                    <!--                <div>-->
                    <!--                    <span>Date</span>July 2013</div>-->
                    <!--                <div>-->
                    <!--                    <span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                    <!--                <div>-->
                    <!--                    <span>Link</span>http://examplecomp.com</div>-->
                    <!--            </div>-->
                    <!--            <p>We need to give each other the space to grow, to be ourselves, to exercise our diversity. We need to give each other space so that we may both give and receive such beautiful things as ideas, openness, dignity, joy, healing, and inclusion.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- End details for portfolio project 5 -->
                    <!-- Start details for portfolio project 6 -->
                    <!--<div id="slidingDiv5" class="toggleDiv row-fluid single-project">-->
                    <!--    <div class="span6">-->
                    <!--        <img src="images/Portfolio06.png" alt="project 6">-->
                    <!--    </div>-->
                    <!--    <div class="span6">-->
                    <!--        <div class="project-description">-->
                    <!--            <div class="project-title clearfix">-->
                    <!--                <h3>Webste for Some Client</h3>-->
                    <!--                <span class="show_hide close">-->
                    <!--                    <i class="icon-cancel"></i>-->
                    <!--                </span>-->
                    <!--            </div>-->
                    <!--            <div class="project-info">-->
                    <!--                <div>-->
                    <!--                    <span>Client</span>Some Client Name</div>-->
                    <!--                <div>-->
                    <!--                    <span>Date</span>July 2013</div>-->
                    <!--                <div>-->
                    <!--                    <span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                    <!--                <div>-->
                    <!--                    <span>Link</span>http://examplecomp.com</div>-->
                    <!--            </div>-->
                    <!--            <p>I went to the woods because I wished to live deliberately, to front only the essential facts of life, and see if I could not learn what it had to teach, and not, when I came to die, discover that I had not lived.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- End details for portfolio project 6 -->
                    <!-- Start details for portfolio project 7 -->
                    <!--<div id="slidingDiv6" class="toggleDiv row-fluid single-project">-->
                    <!--    <div class="span6">-->
                    <!--        <img src="images/Portfolio07.png" alt="project 7">-->
                    <!--    </div>-->
                    <!--    <div class="span6">-->
                    <!--        <div class="project-description">-->
                    <!--            <div class="project-title clearfix">-->
                    <!--                <h3>Webste for Some Client</h3>-->
                    <!--                <span class="show_hide close">-->
                    <!--                    <i class="icon-cancel"></i>-->
                    <!--                </span>-->
                    <!--            </div>-->
                    <!--            <div class="project-info">-->
                    <!--                <div>-->
                    <!--                    <span>Client</span>Some Client Name</div>-->
                    <!--                <div>-->
                    <!--                    <span>Date</span>July 2013</div>-->
                    <!--                <div>-->
                    <!--                    <span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                    <!--                <div>-->
                    <!--                    <span>Link</span>http://examplecomp.com</div>-->
                    <!--            </div>-->
                    <!--            <p>Always continue the climb. It is possible for you to do whatever you choose, if you first get to know who you are and are willing to work with a power that is greater than ourselves to do it.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- End details for portfolio project 7 -->
                    <!-- Start details for portfolio project 8 -->
                    <!--<div id="slidingDiv7" class="toggleDiv row-fluid single-project">-->
                    <!--    <div class="span6">-->
                    <!--        <img src="images/Portfolio08.png" alt="project 8">-->
                    <!--    </div>-->
                    <!--    <div class="span6">-->
                    <!--        <div class="project-description">-->
                    <!--            <div class="project-title clearfix">-->
                    <!--                <h3>Webste for Some Client</h3>-->
                    <!--                <span class="show_hide close">-->
                    <!--                    <i class="icon-cancel"></i>-->
                    <!--                </span>-->
                    <!--            </div>-->
                    <!--            <div class="project-info">-->
                    <!--                <div>-->
                    <!--                    <span>Client</span>Some Client Name</div>-->
                    <!--                <div>-->
                    <!--                    <span>Date</span>July 2013</div>-->
                    <!--                <div>-->
                    <!--                    <span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                    <!--                <div>-->
                    <!--                    <span>Link</span>http://examplecomp.com</div>-->
                    <!--            </div>-->
                    <!--            <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- End details for portfolio project 8 -->
                    <!-- Start details for portfolio project 9 -->
                    <!--<div id="slidingDiv8" class="toggleDiv row-fluid single-project">-->
                    <!--    <div class="span6">-->
                    <!--        <img src="images/Portfolio09.png" alt="project 9">-->
                    <!--    </div>-->
                    <!--    <div class="span6">-->
                    <!--        <div class="project-description">-->
                    <!--            <div class="project-title clearfix">-->
                    <!--                <h3>Webste for Some Client</h3>-->
                    <!--                <span class="show_hide close">-->
                    <!--                    <i class="icon-cancel"></i>-->
                    <!--                </span>-->
                    <!--            </div>-->
                    <!--            <div class="project-info">-->
                    <!--                <div>-->
                    <!--                    <span>Client</span>Some Client Name</div>-->
                    <!--                <div>-->
                    <!--                    <span>Date</span>July 2013</div>-->
                    <!--                <div>-->
                    <!--                    <span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                    <!--                <div>-->
                    <!--                    <span>Link</span>http://examplecomp.com</div>-->
                    <!--            </div>-->
                    <!--            <p>I learned that we can do anything, but we can't do everything... at least not at the same time. So think of your priorities not in terms of what activities you do, but when you do them. Timing is everything.</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- End details for portfolio project 9 -->
                    <!--<ul id="portfolio-grid" class="thumbnails row">-->
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/media1.png" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Our project published in a local newspaper</h3>
                               
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/media02.png" alt="project 2">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Indian Patent Publication of our project</h3>
                                
                                <div class="mask"></div>
                            </div>
                        </li>
                        <!--<li class="span4 mix identity">-->
                        <!--    <div class="thumbnail">-->
                        <!--        <img src="images/Portfolio03.png" alt="project 3">-->
                        <!--        <a href="#single-project" class="more show_hide" rel="#slidingDiv2">-->
                        <!--            <i class="icon-plus"></i>-->
                        <!--        </a>-->
                        <!--        <h3>Thumbnail label</h3>-->
                        <!--        <p>Thumbnail caption...</p>-->
                        <!--        <div class="mask"></div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li class="span4 mix web">-->
                        <!--    <div class="thumbnail">-->
                        <!--        <img src="images/Portfolio04.png" alt="project 4">-->
                        <!--        <a href="#single-project" class="show_hide more" rel="#slidingDiv3">-->
                        <!--            <i class="icon-plus"></i>-->
                        <!--        </a>-->
                        <!--        <h3>Thumbnail label</h3>-->
                        <!--        <p>Thumbnail caption...</p>-->
                        <!--        <div class="mask"></div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li class="span4 mix photo">-->
                        <!--    <div class="thumbnail">-->
                        <!--        <img src="images/Portfolio05.png" alt="project 5">-->
                        <!--        <a href="#single-project" class="show_hide more" rel="#slidingDiv4">-->
                        <!--            <i class="icon-plus"></i>-->
                        <!--        </a>-->
                        <!--        <h3>Thumbnail label</h3>-->
                        <!--        <p>Thumbnail caption...</p>-->
                        <!--        <div class="mask"></div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li class="span4 mix identity">-->
                        <!--    <div class="thumbnail">-->
                        <!--        <img src="images/Portfolio06.png" alt="project 6">-->
                        <!--        <a href="#single-project" class="show_hide more" rel="#slidingDiv5">-->
                        <!--            <i class="icon-plus"></i>-->
                        <!--        </a>-->
                        <!--        <h3>Thumbnail label</h3>-->
                        <!--        <p>Thumbnail caption...</p>-->
                        <!--        <div class="mask"></div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li class="span4 mix web">-->
                        <!--    <div class="thumbnail">-->
                        <!--        <img src="images/Portfolio07.png" alt="project 7" />-->
                        <!--        <a href="#single-project" class="show_hide more" rel="#slidingDiv6">-->
                        <!--            <i class="icon-plus"></i>-->
                        <!--        </a>-->
                        <!--        <h3>Thumbnail label</h3>-->
                        <!--        <p>Thumbnail caption...</p>-->
                        <!--        <div class="mask"></div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li class="span4 mix photo">-->
                        <!--    <div class="thumbnail">-->
                        <!--        <img src="images/Portfolio08.png" alt="project 8">-->
                        <!--        <a href="#single-project" class="show_hide more" rel="#slidingDiv7">-->
                        <!--            <i class="icon-plus"></i>-->
                        <!--        </a>-->
                        <!--        <h3>Thumbnail label</h3>-->
                        <!--        <p>Thumbnail caption...</p>-->
                        <!--        <div class="mask"></div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li class="span4 mix identity">-->
                        <!--    <div class="thumbnail">-->
                        <!--        <img src="images/Portfolio09.png" alt="project 9">-->
                        <!--        <a href="#single-project" class="show_hide more" rel="#slidingDiv8">-->
                        <!--            <i class="icon-plus"></i>-->
                                <!--</a>-->
                                <!--<h3>Thumbnail label</h3>-->
                                <!--<p>Thumbnail caption...</p>-->
                                <!--<div class="mask"></div>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->
        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                 <div class="triangle"></div>
                <div class="container">
                    <div class="title">
                        <h1>Contact Us</h1>
                        
                    </div>
                </div>
                <div class="map-wrapper" >
                    <div class="container"  >
                        <div class="row-fluid"  >
                                   <div align="center" >
                                <?php
        
                                    $file = file_get_contents('./data.txt', FILE_USE_INCLUDE_PATH); //get contact information from data.txt file
                                      
                                    $info = preg_replace("/\n/", "<br>", $file); //line by line execution of contact information
                                    echo $info; // echo contact information on the web page
        
                                ?>
                            </div>
                            <!--<div class="span5 contact-form centered" >-->
                          
                            <!--    <h3>Say Hello</h3>-->
                            <!--    <div id="successSend" class="alert alert-success invisible">-->
                            <!--        <strong>Well done!</strong>Your message has been sent.</div>-->
                            <!--    <div id="errorSend" class="alert alert-error invisible">There was an error.</div>-->
                            <!--    <form id="contact-form" action="php/mail.php">-->
                            <!--        <div class="control-group">-->
                            <!--            <div class="controls">-->
                            <!--                <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />-->
                            <!--                <div class="error left-align" id="err-name">Please enter name.</div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="control-group">-->
                            <!--            <div class="controls">-->
                            <!--                <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />-->
                            <!--                <div class="error left-align" id="err-email">Please enter valid email adress.</div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="control-group">-->
                            <!--            <div class="controls">-->
                            <!--                <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>-->
                            <!--                <div class="error left-align" id="err-comment">Please enter your comment.</div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="control-group">-->
                            <!--            <div class="controls">-->
                            <!--                <button id="send-mail" class="message-btn">Send message</button>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </form>-->
                       
                               
                            <!--</div>   -->
                        </div>

                    </div>
                  
                </div>
                <div class="container">
                 
                    
                    
                    

                </div>
            </div>
        </div>
        <!-- Contact section edn -->
      
	<!-- Marketplace start-->
        <div id="marketplace" class="marketplace">
            <div class="section primary-section " id="users">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                        <h1>Marketplace</h1>
                        
                    </div>
                </div>
                <div class="map-wrapper" >
                    <div class="container"  >
                        <div class="row-fluid"  >
                                   <div align="center" >

        <div class="span3" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.rohitsapkal.com">
                                    <img class="img-circle" src="images/tour.jpg" alt="service 1">
                                    </a>
                            </div>
                            <h3>BhagyaDeep Travels</h3>
                           
                        </div>
                    </div>
         <div class="span3" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.arpsharma.com">
                                    <img class="img-circle" src="images/call.jpg" alt="service 1">
                                    </a>
                            </div>
                            <h3>One call</h3>
                           
                        </div>
                    </div>
         <div class="span3" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.thelearnaid.com">
                                    <img class="img-circle" src="images/learn.png" alt="service 1">
                                    </a>
                            </div>
                            <h3>The Learning Aid</h3>
                           
                        </div>
                    </div>
        <div class="span3" >
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                            <a href="http://www.thetechsp.com">
                                    <img class="img-circle" src="images/techsp.jpg" alt="service 1">
                                    </a>
                            </div>
                            <h3>TechiesTown</h3>
                           </div></div>
                        </div>
                    </div>
      </div></div></div>

             

        <!-- Marketplace end-->
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