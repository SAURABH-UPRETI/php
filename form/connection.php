<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$genderr = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$con = mysqli_connect("localhost","root","","form");

  
$sqlquery = "INSERT INTO `form`( `fname`, `lname`, `gender`, `email`, `pass`, `phone`) VALUES 
('$firstName','$lastName','$genderr','$email','$password','$number')";
  
if (mysqli_query($con, $sqlquery)) {
    echo "New record created successfully";
  } else {
    echo "Error: ";
  }    
  

?>