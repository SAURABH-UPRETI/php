<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>form admin</title>
</head>
<body>
<form >
<table class="table border mt-5">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";   

$con = mysqli_connect("localhost","root","","form");

  
$sql = "SELECT * FROM `form`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<center><tr'> <h1>REGISTERED STUDENT DATA</h1></tr></center><hr/>";
    echo "<tr>";
        echo "<td class='border'> SN</td>";
        echo "<td class='border'>FIRST NAME</td>";
        echo "<td class='border'> LAST NAME</td>";
        echo "<td class='border'>GENDER</td>";
        echo "<td class='border'>EMAIL</td>";
        echo "<td class='border'>PASSWORD</td>";
        echo "<td class='border'>PHONE NUMBER</td>";
        echo "</tr>";
            
    while($row = mysqli_fetch_assoc($result)) {
      
        echo "<tr>";
        echo "<td class='border'>" . $row['sn'] . "</td>";
        echo "<td class='border'>" . $row['fname'] . "</td>";
        echo "<td class='border'>" . $row['lname'] . "</td>";
        echo "<td class='border'>" . $row['gender'] . "</td>";
        echo "<td class='border'>" . $row['email'] . "</td>";
        echo "<td class='border'>" . $row['pass'] . "</td>";
        echo "<td class='border'>" . $row['phone'] . "</td>";
        echo "<td class='border'>" . "<input type='button' value='update'> </td>";
        echo "<td class='border'>" . "<input type='button' value='update'> </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}



?>
</table>
</form>
</body>
</html>
