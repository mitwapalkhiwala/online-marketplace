<?php
   $servername = "localhost";
   $username = "admin_mitwa";
   $password = "mitwa1234";
   $dbname = "admin_userInformation";
   $companyName = $_GET['companyName'];
  
    // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }



$sql = 'select product_name, avg(rating) as total_rating from Ratings where company_name ="'. $companyName .'" group by product_name order by sum(rating) desc limit 5';

$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $review[$i] = array(
            "productName" => $row["product_name"],
            "totalRating" => $row["total_rating"]
        );
        $i++;
    }
} else {
    $review = array(
        "productName" => null,
        "totalRating" => null
    );
}
echo json_encode($review);
?>
