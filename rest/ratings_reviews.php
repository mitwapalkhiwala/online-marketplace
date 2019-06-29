<?php
   $servername = "localhost";
   $username = "admin_mitwa";
   $password = "mitwa1234";
   $dbname = "admin_userInformation";
   $productName = $_GET['productName'];
    // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }



$sql = "SELECT AVG(rating) as rating FROM `Ratings` WHERE product_name   = '$productName'";
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
	echo "This product has not been rated yet.";
	}

echo "<br><h3><p style='color:#4BE6E2;'><b>Ratings</b></p></h3><hr><img src=".$src." width='200' height='50'><hr>";
    }
} else {
    echo "No such product found";
}

echo "<h3><p style='color:#4BE6E2;'><b>Reviews</b></p></h3><hr>";
$sql1 = "SELECT email, review FROM `Ratings` WHERE product_name = '$productName'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h4><p style='color:#4BE6E2;'><b>".$row["email"] ."</b> ". "</p></h4><p style='color:#4BE6E2;'>".$row["review"] . "</p><hr style='background-color:#4BE6E2'>";
    }
} else {
    echo "<p style='color:#4BE6E2;'>This product has not been reviewed yet.</p>";
}


mysqli_close($conn);


?>