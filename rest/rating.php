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



$data = json_decode(file_get_contents("php://input"));

$productName = $data->productName;
$companyName = $data->companyName;
$email = $data->email;
$review = $data->review;
$rating = $data->rating;

$sql = 'select * from Ratings where email = "'. $email.'" and product_name = "'.$productName.'"';

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $sql = 'update Ratings 
 set review = "'. $review.'", rating = "'.$rating.'" where email = "'. $email.'" and product_name = "'
     .$productName.'"';
     if ($conn->query($sql) === TRUE) {
         echo "True";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
}
else{
    $sql = "INSERT INTO Ratings (email, product_name, company_name, review, rating)
VALUES ('$email','$productName', '$companyName',  '$review','$rating')";
    
    if ($conn->query($sql) === TRUE) {
        echo "True";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


/* if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo "First Name: " . $row["first_name"]. " Last Name: " . $row["last_name"]. "Email " . $row["email"]. "<br>";
 }
 } else {
 echo "0 results";
 } */
