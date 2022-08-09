<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
// $email = $_POST['email'
$address = $_POST['address'];
$number = $_POST['number'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'rentsystem');
if($conn->connect_error){
die('connection failed  : ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into information(firstName, lastName, address, number, number1, number2)
                   values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi",$firstName, $lastName, $address, $number, $number1, $number2);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();          
}
?>