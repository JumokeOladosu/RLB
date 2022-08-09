<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to RLB | </title>
    <link rel="stylesheet" href="css/rlb.css">
</head>
<body>
    <div class="top-area">
        <h1>Welcome, Jumoke Oladosu.</h1>
         
        <div class="profile-img">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
        </div>
    </div>

    <div class="records">
        <div class="card">
            <h2>300</h2>
            <span>Total Transaction</span>
        </div>
        <div class="card">
            
        </div>
        <div class="card">
            
        </div>
    </div>

    <div class="advert">
        <div class="ad1">

        </div>
        <div class="ad2">
            
        </div>
    </div>
</body>
</html>
