<?php

session_start();


$hostname="localhost";
$user="root";
$password="";
$db="travel";

$data=mysqli_connect($hostname,$user,$password,$db);

if($data===false)
 {
    die("Connection error");
 }

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission

     $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
   








        $sql="INSERT INTO user(username,email,phone,message) VALUES('$username','$email','$phone','$message')";

        $result=mysqli_query($data,$sql);
    
     

     if($result)
     {

        echo "New record created successfully";
        //echo "A Student has been registered";
    }

    else{
        echo "Invalid Details";
    }
}

?>


