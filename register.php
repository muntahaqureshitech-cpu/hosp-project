<?php 
require_once "master/connection.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_phone = $_POST["user_phone"];
    $user_password = $_POST["user_password"];

   $query = "insert into user_register(user_name,user_email,user_phone,user_password) values('$user_name','$user_email','$user_phone','$user_password')";
   $ins = mysqli_query($con,$query);
   if($ins){
       echo "<script>alert('User Register');</script>";
    echo "<script>window.location = 'signup.php';</script>";
   }
}
else {
    echo "<script>alert('Fill This Form');</script>";
    echo "<script>window.location = 'signup.php';</script>";
}



?>