<?php
    include("connect.php");
    $User_ID = $_POST['user_id'];
    $Email_address = $_POST['email_address'];
    $Mobile_No = $_POST['mobile_no'];
    $password; = $_POST['password'];
    $cpassword; = $_POST['cpassword'];


    if($password==$cpassword){
        $insert = mysqli_query($connect, "INSERT INTO login (user_id, email_address, mobile_No, password, cpassword)
         VALUES ('$user_id', '$email_address', '$Mobile_No', '$password', '$cpassword')");
        if($password==cpassword){
            echo'
        <script>
        alter("Registration successful!");
        window.location = "../";
        </script>
        ';
        } 
        else{
            echo'
        <script>
        alter(Some error occure!");
        window.location = "../login_page.html";
        </script>
        ';
        }

    }
    else{
        echo'
        <script>
        alter("Password and Confirm password does not match!");
        window.location = "../login_page.html";
        </script>
        ';
    }