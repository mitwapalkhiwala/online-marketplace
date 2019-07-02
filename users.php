<?php
session_start();

if (!isset($_SESSION['allowed'])){
    header("location:login.php");
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
                            <li class="active"><a href="http://www.mitwapalkhiwala.com/" <?php session_destroy(); ?>>Logout</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
            
        </div>
        
        <div class="section primary-section">
            <div class="triangle"></div>
            <div class="container">
                <h2>List of Users</h2><br><br>
        <?php
        $servername = "localhost";
        $username = "admin_mitwa123";
        $password = "*******";
        $dbname = "admin_userInformation1";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Name: " . $row["firstName"]. " " . $row["lastName"]. "<br> Email: ".$row["email"]. "<br> Address: ".$row["address"]. "<br> Home Phone: ". $row["homePhone"]. "<br> Cell Phone: ". $row["cellPhone"]. "<br><br>";
                }
            } else {
                echo "No such results found";
            }

mysqli_close($conn);
       
         ?>
         </div>
         
         </div>
          <div class="section primary-section"></div>
           <div class="section primary-section"></div>
            <div class="section primary-section"></div>
             <div class="section primary-section"></div>
              <div class="section primary-section"></div>
              
          <!-- Footer section start -->
        <div class="footer">
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