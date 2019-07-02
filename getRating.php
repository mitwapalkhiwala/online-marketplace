<?php
   $servername = "localhost";
 $username = "admin_mitwa123";
$password = "*******";
$dbname = "admin_userInformation1";
   $productName = $_SESSION['productName'];
    // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }



$sql = "SELECT AVG(ratings) AS rating FROM `ratings` WHERE productName = '$productName'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          if($row["rating"]>=0 && $row["rating"]<0.5){
        $src = 'images/803px-0_stars.svg.png';
	}
	else if($row["rating"]>=0.5 && $row["rating"]<1 ){
        $src = 'images/803px-0.5_stars.svg.png';
	}
	else if($row["rating"]>=1 && $row["rating"]<1.5){
        $src = 'images/803px-1_stars.svg.png';
	}
	else if($row["rating"]>=1.5 && $row["rating"]<2){
        $src = 'images/803px-1.5_stars.svg.png';
	}
	else if($row["rating"]>=2 && $row["rating"]<2.5){
        $src = 'images/803px-2_stars.svg.png';
	}
	else if($row["rating"]>=2.5 && $row["rating"]<3){
        $src = 'images/803px-2.5_stars.svg.png';
	}
	else if($row["rating"]>=3 && $row["rating"]<3.5){
        $src = 'images/803px-3_stars.svg.png';
	}
	else if($row["rating"]>=3.5 && $row["rating"]<4){
        $src = 'images/803px-3.5_stars.svg.png';
	}
	else if($row["rating"]>=4 && $row["rating"]<4.5){
        $src = 'images/803px-4_stars.svg.png';
	}
	else if($row["rating"]>=4.5 && $row["rating"]<5){
        $src = 'images/803px-4.5_stars.svg.png';
	}
	else if($row["rating"]==5){
        $src = 'images/803px-5_stars.svg.png';
	}
	else {
        $src='images/803px-0_stars.svg.png';
	echo "This product has not been rated yet.";
	}

echo "<br><h3><p style='background-color: #4BE6E2;color:#181A1C;'><b>Ratings</b></p></h3><br><img src=".$src." width='140' height='110'><br><br> ";
    }
} else {
    echo "No such product found";
}

echo "<h3><p style='background-color: #4BE6E2;color:#181A1C;'><b>Reviews</b></p></h3><br>";
$sql1 = "SELECT reviews.review, reviews.email, user.firstName, user.lastName FROM `reviews` inner join `user` WHERE user.email = reviews.email && reviews.productName = '$productName'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h4><p style='background-color: #4BE6E2;color:#181A1C;'>".$row["firstNa<?php
include "../db_connect.php";

$data = json_decode(file_get_contents("php://input"));

$productName = $data->productName;
$email = $data->email;

$sql = "select review, rating from Ratings where product_name= '" . $productName . "' and email='" . $email . "'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $review = array(
            "review" => $row["review"],
            "rating" => $row["rating"]
        );
    }
} else {
    $review = array(
        "review" => null,
        "rating" => null
    );
}
echo json_encode($review);
?>me"] . " " . $row["lastName"] . "</p></h4>".$row["review"] . "<br><br>";
    }
} else {
    echo "This product has not been reviewed yet.";
}


mysqli_close($conn);


?>