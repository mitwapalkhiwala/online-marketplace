<?php
   $servername = "localhost";
   $username = "admin_mitwa123";
   $password = "*******";
   $dbname = "admin_userInformation1";
   $productName = $_GET['productName'];
   $email = $_GET['email'];
    // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }



$sql = "SELECT rating FROM `Ratings` WHERE product_name   = '$productName' and email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     if($row["rating"]>=0 && $row["rating"]<0.5){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-0_stars.svg.png';
	}
	else if($row["rating"]>=0.5 && $row["rating"]<1 ){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-0.5_stars.svg.png';
	}
	else if($row["rating"]>=1 && $row["rating"]<1.5){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-1_stars.svg.png';
	}
	else if($row["rating"]>=1.5 && $row["rating"]<2){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-1.5_stars.svg.png';
	}
	else if($row["rating"]>=2 && $row["rating"]<2.5){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-2_stars.svg.png';
	}
	else if($row["rating"]>=2.5 && $row["rating"]<3){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-2.5_stars.svg.png';
	}
	else if($row["rating"]>=3 && $row["rating"]<3.5){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-3_stars.svg.png';
	}
	else if($row["rating"]>=3.5 && $row["rating"]<4){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-3.5_stars.svg.png';
	}
	else if($row["rating"]>=4 && $row["rating"]<4.5){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-4_stars.svg.png';
	}
	else if($row["rating"]>=4.5 && $row["rating"]<5){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-4.5_stars.svg.png';
	}
	else if($row["rating"]==5){
        $src = 'http://www.mitwapalkhiwala.com/images/803px-5_stars.svg.png';
	}
	else {
        $src='http://www.mitwapalkhiwala.com/images/803px-0_stars.svg.png';
	echo "";
	}

echo "<br><h3><p style='color:#4BE6E2;'><b>Your Ratings</b></p></h3><hr><img src=".$src." width='200' height='50'><hr> ";
    }
} else {
    echo "";
}

$sql1 = "SELECT email, review FROM `Ratings` WHERE product_name = '$productName' and email='$email'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
echo "<h3><p style='color:#4BE6E2;'><b>Your Reviews</b></p></h3><hr>";

    while($row = $result->fetch_assoc()) {
	
        echo "<h4><p style='color:#4BE6E2;'><b>".$row["email"] ."". "</b></p></h4><p style='color:#4BE6E2;'>".$row["review"] . "</p><hr>";
    }
} else {
    echo "";
}


mysqli_close($conn);


?>