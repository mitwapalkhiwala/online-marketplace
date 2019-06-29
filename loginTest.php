<?php 
    $password= $_POST['password'];
    $username= $_POST['username'];
    $link = $_POST['link'];
    $checkUser="";
    $checkPassword="";
    session_start();
    $myfile = fopen("credentials.txt", "r");
    while(!feof($myfile)) {
        // echo "<h4 class='contacts'>".fgets($myfile). "</h4>";
        $line=fgets($myfile);
        if (strpos($line, 'Username') !== false) {
            $checkUser=explode(":", $line)[1];
            $checkUser=trim($checkUser);
        }
        elseif(strpos($line, 'Password') !== false)
        {
            $checkPassword=explode(":", $line)[1];
            $checkPassword=trim($checkPassword);
        }
      }
    fclose($myfile);
    if ($checkUser==$username && $checkPassword==$password){
        $_SESSION["allowed"]=true;
        header('location:users.php?link='.$link);
    }
    else{
        $_SESSION["message"]="Username and Password do not match! Please try again";
        echo "Something went Wrong!";
        header('location:login.php');
    }
?>