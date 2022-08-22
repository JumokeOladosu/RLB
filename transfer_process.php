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
    session_start();
    $user_id = $_SESSION['user_id'];
    // Fetch users data by session id
    $Userquery = "SELECT * FROM users WHERE id = $user_id"; 
    // Processed the query
    $proUserQuery = mysqli_query($conn,$Userquery);
    // Output result as an associative array
    $senderData = mysqli_fetch_assoc($proUserQuery);


    /**
     * 
     *  Check if the account number and bank are found
     * 
     * 
     */
    $acctcheck = "SELECT * FROM users WHERE bank = $bank AND account_number = '{$account_no}'";
    // Processed the query
    $acctCheckQuery = mysqli_query($conn,$acctcheck);
    // Output result as an associative array
    $recieverData = mysqli_fetch_assoc($acctCheckQuery);

    if($recieverData){
        
        if($senderData['balance'] >= $amount){
            
            // Sender New Balance
            $Sendernewbalnce = $senderData['balance'] - $amount;

            //. reciever new balance
            $recieverNewBalance = $recieverData['balance'] + $amount;
            $recieverId = $recieverData['id'];

            //process the send and reciver balance
            $updateSenderBalance = mysqli_query($conn, "UPDATE users SET balance = $Sendernewbalnce WHERE id = $user_id");
            $updateSenderBalance = mysqli_query($conn, "UPDATE users SET balance = $recieverNewBalance WHERE id = recieverId");

            echo "Transaction Successfully Initiated Thanks....";

        }else{
            echo "Sorry You did not have up to that amount to send out";
        }


    }else{

        echo "Account Number not found or Bank does not match";

    }
    
