<?php

$servername = "localhost";
$username = "admin_mitwa123";
$password = "*******";
$dbname = "admin_userInformation1";
$email =  $_POST['email'];
$productName =  $_POST['productName'];
$review =  $_POST['review'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($email != "" && $productName != "" && $review !=""){
$sql = "INSERT INTO reviews (email, productName, review)
VALUES ('$email', '$productName', '$review')";

if (mysqli_query($conn, $sql)) {
    echo "Review added successfully!";
    
} else {
    echo "Couldn't add review. Please try again.";
}
}
else{
echo "Data missing.";

}
mysqli_close($conn);



?>