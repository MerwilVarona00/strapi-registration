<?php

// include "vendor/autoload.php";

// use App\AuthClient;

// $client = new AuthClient();

// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $confirm_password = $_POST['confirm_password'];

// try{
//     if(isset($_POST['username']) && ($password == $confirm_password)){
//         $response = $client->register($username, $email, $password);

//         $message = "Successfully Registered!";
//     }
//     else{
//         $message = "Password and Confirm Password didn't match";
//     }
// }
// catch (Exception $e) {
//     echo $e->getMessage();
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<div class="card">
<p>Proceed to</p>
    <h4>Email: </h4>
    <div class="btn">
    <a href="login-form.php">Login Page</a>
    </div>
</div>
</body>
</html>



