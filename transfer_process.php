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

