<?php
require ('connect.php');
    if ( isset($_POST['full_name']) ) {
       $firstname = $_POST['full_name'];
    }
    if ( isset($_POST['email_address'])) {
       $email =$_POST['email_address'];
    }
    if ( isset($_POST['password'])) {
      $password =$_POST['password'];
    } 

    // Generate Account Number
    $accountNo = rand(1000000000,9999999999);

