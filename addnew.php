<?php
$servername = "localhost";
$username = "admin_mitwa123";
$password = "*******";
$dbname = "admin_userInformation1";
$data= json_decode(file_get_contents("php://input"));
$firstName =  $data->firstName;
$lastName = $data->lastName;
$email =  $data->email;
$address =  $data->address;
$homePhone =  $data->homePhone;
$cellPhone =  $data->cellPhone;
$passWord= $data->password;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if($firstName != "" && $lastName != "" && $email !="" && $address != "" && $homePhone != "" && $cellPhone != "" && $password){
$sql = "INSERT INTO user (firstName, lastName, email, address, homePhone, cellPhone, password)
VALUES ('$firstName', '$lastName', '$email', '$address', '$homePhone', '$cellPhone', '$passWord')";

if (mysqli_query($conn, $sql)) {
    echo "New User Created successfully";
    
} else {
    echo "Couldn't create new user. Please try again.";
}
}
mysqli_close($conn);
?>
