<?php 
session_start();
if (!isset($_SESSION['token'])) {
        header("location:services.php");
    }
    $curl = curl_init();
    $email=$_COOKIE['email'];
    $array1=array();
    $array1['email']=$email;
    $array1['companyName']='TECHIESTA';
    $array1['productName']='Website Development';
    $data=json_encode($array1);


    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://www.mitwapalkhiwala.com/rest/tracking.php",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: application/json",
        "postman-token: 31863584-ae0d-9f93-4052-f309c431b157"
      ),
    ));
           

    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    }
        if (isset($_POST['review'])) {
        $rate=0;
        if(isset($_POST['rating'])){
            $rate=$_POST['rating'];
        }
        $email_new=$_COOKIE['email'];
        $array1_new=array();
        $array1_new['email']=$email_new;
        $array1_new['productName']='Website Development';
        $array1_new['review']=$_POST['review'];
        $array1_new['rating']=$rate;
        $array1_new['companyName']="TECHIESTA";
        $data_new=json_encode($array1_new);
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://mitwapalkhiwala.com/rest/rating.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $data_new,
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json",
            "postman-token: 44487622-9cc0-55d7-0e64-e8c9868a8aff"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
        } 
        
    }
$curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://www.mitwapalkhiwala.com/rest/ratings_reviews.php?productName=Website%20Development",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "postman-token: dfdd44dc-697b-4835-0b0e-a56a96560a88"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    }

$curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://www.mitwapalkhiwala.com/rest/showUserRating.php?productName=Website%20Development&email=$email_new",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "postman-token: dfdd44dc-697b-4835-0b0e-a56a96560a88"
      ),
    ));
    
    $ratingUser = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
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
       <style>
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }

h1 { font-size: 1.5em; margin: 10px; }

/** Style Star Rating Widget ***/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/** CSS Magic to Highlight Stars on Hover **/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
    </style>
<script>
        function getInput(){
            document.getElementById('review').style.display = "block";
            document.getElementById('result').style.display = "none";
        }
    </script>

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
           		     <h2>Website Development</h2><br><br>
      		           <img style="margin-left:auto;margin-right:auto;display:block;left:0;right:0;" src="images/code.jpg"><br><br>
          		  <p>Web development is the work involved in developing a web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.</p>
                   <?php
			 $_SESSION['productName'] = 'Website Development';
        

              $random = mt_rand();
              setcookie("Page[$random]","Website Development",(time()+86400), '/');
               if(!isset($_COOKIE["all_companies_visited_pages"])){
               $count_all=0;
               setcookie("count_all",$count_all);
               setcookie("all_companies_visited_pages[0]","");
              }else{
      	      $count1=$_COOKIE["count_all"];
              $count1=$count1+1;
              setcookie("all_companies_visited_pages[".$count1."]","Website Development");
              setcookie("count_all",$count1);
  		}

			?>
   

 	</div>
	<div class="container">
     	
   		
   <table><tr><td> <div class="col-sm-6">
        <div id="review">
        <form method="POST">
              <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="good - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="good - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="bad - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="bad - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="0.5" for="starhalf" title="Very bad - 0.5 stars"></label>
            </fieldset><br><br>
            <textarea rows="4" cols="50" placeholder="Write your Reviews here..." style="resize: none;" height="500px" width="100%" overflow="scroll" name="review" required></textarea>
           <br><br> <button type="submit">Post your ratings</button>
        </form>
<?php
     			   if(isset($_POST['review'])){
    		        echo "<h4 style='color:white' id='result'>Thanks for rating this product</h4>";
        		}
   		 ?>
  </div>
    </div></td>
<td style="padding-left: 180px;"> <?php echo $ratingUser; ?></td>

<td style="padding-left: 220px;">
    <div class="col-sm-6" style="float:right;" >
        <?php echo $response; ?> </div>
    </td></tr></table>
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