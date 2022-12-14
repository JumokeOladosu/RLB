<?php
include('connect.php');

session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("Location: index.php");
}

$user_id = $_SESSION['user_id'];
// Fetch users data by session id
$Userquery = "SELECT * FROM users WHERE id = $user_id"; 
// Processed the query
$proUserQuery = mysqli_query($conn,$Userquery);
// Output result as an associative array
$userData = mysqli_fetch_assoc($proUserQuery);



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
        <h1>Welcome, <?php echo $userData['full_name'] ?></h1>
         
        <div class="profile-img">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">

            <div class="logout-sec">
                <a href="logout.php">LogOut</a>
            </div>
        </div>
        
    </div>

    <div class="records">
        <div class="card">
            <h2>300</h2>
            <span>Total Transaction</span>
        </div>
        <div class="card">
             <h2><?php echo $userData['account_number'] ?></h2>
            <span>Account Number </span>
        </div>
        <div class="card">
             <h2>N<?php echo number_format($userData['balance']) ?></h2>
            <span>Account Balance </span>
        </div>
    </div>

    <div class="advert">
        <div class="ad1">

            <div class="left-link">
                <a href="transfer.php">Transfer Now</a>
            </div>

            <div class="left-link">
                <a href="">Transfer Now</a>
            </div>

            <div class="left-link">
                <a href="">Transfer Now</a>
            </div>

        </div>
        <div class="ad2">
            
        </div>
    </div>
</body>
</html>
