<?php
    require('connect.php');

    if(isset($_POST['bank'])){
        $bank = $_POST['bank'];
    }

    if(isset($_POST['account_no'])){
        $bank = $_POST['account_no'];
    }

    if(isset($_POST['amount'])){
        $bank = $_POST['amount'];
    }

