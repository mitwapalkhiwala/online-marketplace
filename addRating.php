<?php

$servername = "localhost";
$username = "admin_mitwa123";
$password = "*******";
$dbname = "admin_userInformation1";
$email =  $_GET['email'];
$productName =  $_GET['productName'];
$ratings =  $_GET['ratings'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($email != "" && $productName != "" && $ratings !=""){
$sql = "INSERT INTO `ratings`(`email`, `productName`, `ratings`) VALUES ('$email', '$productName', '$ratings')";

if (mysqli_query($conn, $sql)) {
    echo "Rating added successfully!";
    
} else {
    echo "Couldn't add rating. Please try again.";
}
}
else{
echo "Data missing.";

}
mysqli_close($conn);



?>