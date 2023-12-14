<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="signup.css" type="text/css">
    <title>inventory system - Karanja</title>
</head>

<body>
    <form action="" method="POST">
        <h1>signup page</h1>
        <label for="fname">first name</label><br>
        <input type="text" name="fname" id="fname" required><br><br><br>
        <label for="lname">last name</label><br>
        <input type="text" name="lname" id="lname" required><br><br><br>
        <label for="tel">telephone</label><br>
        <input type="text" name="tel" id="tel" required><br><br><br>
        <label for="email">email address</label><br>
        <input type="email" name="email" id="email" required><br><br><br>
        <label for="pass">password</label><br>
        <input type="text" name="pass" id="pass" required><br><br>
        
        <input type="submit" value="register" name="register">
        already registered? <a href="login.php">login</a>
</form>
</body>

</html>

<?php

require "connection.php";

if(isset($_POST['register'])){
    // grab data...
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $status = 'client';

    // insert into database...
    $insert = mysqli_query($connect, "INSERT INTO users(fname,lname,tel,email,password,status) VALUES('$fname','$lname','$tel','$email','$pass','$status')");
    if($insert){
        // redirect to landing page...
        header("LOCATION: client.php?email=$email");
    }else{
        echo "values failed";
    }
}


?>