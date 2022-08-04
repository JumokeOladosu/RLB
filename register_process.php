<?php
    require('connect.php');

    if ( isset($_POST['full_name']) ) {
       $fullname = $_POST['full_name'];
    }
    if ( isset($_POST['email_address'])) {
       $email =$_POST['email_address'];
    }
    if ( isset($_POST['password'])) {
      $password =$_POST['password'];
    }
    
    // Check if email address is found
    $checkEmailQuery = "SELECT COUNT(*) as `get` FROM users WHERE email = '{$email}'";
    $proCheckEmail = mysqli_query($conn, $checkEmailQuery);
    $getNumber = mysqli_fetch_assoc($proCheckEmail);

    if ($getNumber['get'] > 0) {
      echo "Email Address already found please try new one";
    }else{

      // Generate Account Number
      $accountNo = rand(1000000000,9999999999);

      // Insert data into database
      $query = "INSERT INTO users (account_number, password, full_name, email) VALUES ('{$accountNo}', '{$password}', '{$fullname}', '{$email}')";
      $processQuery = mysqli_query($conn, $query);


      echo "Successfully Registered Here is your account Number :".$accountNo;
      
    }

    

