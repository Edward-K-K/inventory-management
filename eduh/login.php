<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="" method="POST">
        <h1>login page</h1>
        <label for="email">email address</label><br><br>
        <input type="email" name="email" id="email" required><br><br>
        <label for="pass">password</label><br><br>
        <input type="text" name="pass" id="pass" required><br><br>
        <input type="submit" value="login" name="login">
        not registered? <a href="signup.php">register</a>
    </form>
    
</body>
</html>

<?php

require "connection.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $select = "SELECT * FROM users WHERE email = '$email' AND password = '$pass' AND status = 'client'";
    $selectQuery = mysqli_query($connect,$select);
    if(mysqli_num_rows($selectQuery)>0){
        $selectRow = mysqli_fetch_assoc($selectQuery);
        if($selectRow){
            header("LOCATION: client.php?email=$email&&status=client");
        }else{
            echo "couldn't redirect";
        }
    }else{
        echo "not found";
    }

    $select = "SELECT * FROM users WHERE email = '$email' AND password = '$pass' AND status = 'admin'";
    $selectQuery = mysqli_query($connect,$select);
    if(mysqli_num_rows($selectQuery)>0){
        $selectRow = mysqli_fetch_assoc($selectQuery);
        if($selectRow){
            header("LOCATION: admin.php?email=$email&&status=admin");
        }else{
            echo "couldn't redirect";
        }
    }else{
        echo "not found";
    }
    
}

?>