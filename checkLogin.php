<?php
$servername = "localhost";
$username = "admin_mitwa123";
$password = "*******";
$dbname = "admin_userInformation1";
$data= json_decode(file_get_contents("php://input"));
$email =  $data->email;
$passWord = $data->password;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select * from user where email='$email' and password='$passWord'";
$result=mysqli_query($conn, $sql);

//print_r($result->num_rows);
if($result->num_rows){
	 if(isset($_GET['link'])){
		echo $_GET['link'];
	}
}else{
	echo "Failed";
}
//echo $sql;
//if($email != "" && $password !="" ){
//	echo "inside";
	//
//	echo $sql="select * from user where email='$email' and password='$passWord'";
//
//	$
//	if ($result) 
//	   echo $result;
//    
//	} else {
//	  echo {"message":"failed to login"};
//	}

//}

mysqli_close($conn);
?>
