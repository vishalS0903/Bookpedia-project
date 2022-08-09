<?php
echo "welcome, ready to connection";

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect('localhost', 'root', '');

$sql = "INSERT INTO 'information'('first_name', 'last_name', 'mobile', 'adhar', 'enrollment') VALUES ('$first_name', '$last_name', '$mobile', '$email', '$aadhar', '$enrollment')";


?>