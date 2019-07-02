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
?>