
<?php
$servername = "localhost";
$username = "admin_mitwa";
$password = "mitwa1234";
$dbname = "admin_userInformation";
$email = $_GET['email'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT DISTINCT product_name, company_name, timeStamp FROM `Tracking` WHERE email='$email' order by timeStamp desc";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
	
        echo "<h4><p style='color:#4BE6E2;'><b>".$row["product_name"] ."". "</b></p></h4><p style='color:#4BE6E2;'>".$row["company_name"] . "</p><br><hr>";
    }
} else {
    echo "You have not visited any services on the marketplace yet!";
}


mysqli_close($conn);




?>