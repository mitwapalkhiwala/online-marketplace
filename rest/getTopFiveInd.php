<?php
   $servername = "localhost";
   $username = "admin_mitwa123";
   $password = "*******";
   $dbname = "admin_userInformation1";
   $companyName = $_GET['companyName'];

    // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }



$sql = "select product_name, rating from Ratings where company_name= '" . $companyName . "' order by rating desc limit 5";

$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $review[$i] = array(
            "productName" => $row["product_name"],
            "rating" => $row["rating"]
        );
        $i++;
    }
    
} else {
    $review = null;
}
echo json_encode($review);
?>