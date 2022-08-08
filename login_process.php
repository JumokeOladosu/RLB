<?php
    require('connect.php');

    session_start();
    
    if ( isset($_POST['account_no'])) {
        $account_no =$_POST['account_no'];
    }

    if ( isset($_POST['password'])) {
        $password =$_POST['password'];
    }

    // check if submitted data is found in the database
    $loginQuery  = "SELECT * FROM users WHERE account_number = '{$account_no}' AND password = '{$password}'";
    $proLoginQuery = mysqli_query($conn, $loginQuery);
    $getLoginData = mysqli_fetch_assoc($proLoginQuery);


    if ($getLoginData) {

        // set session
        $_SESSION['user_id'] = $getLoginData['id'];
        header("Location: success.php");

        // echo "Logged in successfully";
    }else{
        echo "Login details not found";
    }


