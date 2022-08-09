<?php 
$connect = mysqli_connect("localhost", "root", "", "login_page") or die("connection failed");
if($connect){
echo"connected!";
}
else{
    echo"not connected!";
}

?>