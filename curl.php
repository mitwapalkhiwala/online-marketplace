<?php
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
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




$sql = "SELECT id, firstName, lastName, email, address, homePhone, cellPhone FROM user";
$result = $conn->query($sql);
 $users = array();
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
	
	$userData = array (
	"id" => $row["id"],
        "first_name" => $row["firstName"],
	"last_name" => $row["lastName"],
	"email" => $row["email"],
	"home_address" => $row["address"],
	"home_phone" => $row["homePhone"],
	"cell_phone" => $row["cellPhone"]
	);
       
	array_push($users,$userData);
	
    }
	 http_response_code(200);
	 echo json_encode($users);

} 
else{
     http_response_code(404);
     echo json_encode(array("message" => "No users found."));
}

mysqli_close($conn);
?>