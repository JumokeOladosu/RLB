<?php
    require('connect.php');

    if(isset($_POST['bank'])){
        $bank = $_POST['bank'];
    }

    if(isset($_POST['account_no'])){
        $account_no = $_POST['account_no'];
    }

    if(isset($_POST['amount'])){
        $amount = $_POST['amount'];
    }


    /**
     * 
     * get the details of the sender
     * 
     */
    $user_id = $_SESSION['user_id'];
    // Fetch users data by session id
    $Userquery = "SELECT * FROM users WHERE id = $user_id"; 
    // Processed the query
    $proUserQuery = mysqli_query($conn,$Userquery);
    // Output result as an associative array
    $senderData = mysqli_fetch_assoc($proUserQuery);


    /**
     * 
     *  Check if the account numeber and bank are found
     * 
     * 
     */

