<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();
$identifier = $_POST['identifier'];
$password = $_POST['password'];

try{
    if(isset($_POST['identifier'])){
         $response = $client->login($identifier, $password);

         $decoded_response = json_decode($response->getBody()->getContents());
         $data = $decoded_response->user;
         }
         else{
         echo"<script>window.location.href='login.php';</script>";
    }
}
catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Successful</title>
    <style>
        body{
            background-color: #B9C3FA;
            font-family: "Lucida Console", "Courier New", monospace;


        }
        .card {
        width: 700px;
        height: 215px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 80px;
        background: rgb(255, 255, 255);
        border-radius: 0.4em;
        box-shadow: 0.3em 0.3em 0.7em #7551F8;
        transition: border 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: rgb(250, 250, 250) 0.2em solid;
        }

        .card:hover {
        border: #7D5AFF 0.2em solid;
        }
        h2{
            text-align: center;
        }
        h4{
            text-align: center;
        }
        .bt{
            margin-left: 89%;
            margin-top: 9.5%;
            color: rgb(0, 0, 0);
            background-color: #B9C3FA;
            border: 2px solid #B9C3FA;
            border-radius: 6px;
            height: 30px;
            font-weight: bold;
        }
    </style>

</head>
<body>
<div class="card">
    <h2>Welcome to Strapi <?= $data->username ?>!</h2>
    <h4>Email: <?= $data->email ?></h4>
    <div class="btn">
        <a href="login-form.php"><button class="bt">Logout</button></a>
    </div>
</div>
</body>
</html>
