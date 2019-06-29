<?php
   $servername = "localhost";
   $username = "admin_mitwa";
   $password = "mitwa1234";
   $dbname = "admin_userInformation";
    // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }


$sql = "select product_name, count(product_name) as a from Tracking group by product_name order by a desc limit 5";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $review[$i] = array(
            "productName" => $row["product_name"],
            "totalViews" => $row["a"]
        );
        $i++;
    }
} else {
    $review = array(
        "productName" => null,
        "totalViews" => null
    );
}
echo json_encode($review);
?>
