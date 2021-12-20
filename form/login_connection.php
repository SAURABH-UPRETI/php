<?php

$server= "localhost";
$user= "root";
$pass = "";
$dbname="form";

$user = $_POST['user_name'];
$pass = $_POST['password'];

$con = mysqli_connect("localhost", "root", "", "form");

$sql="INSERT INTO `login`( `user`, `pass`) VALUES ('$user','$pass' )";
if(mysqli_query($con,$sql)){
    echo "data submited succesfully";
}
else{
    echo "error";
}

?>