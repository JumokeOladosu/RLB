<?php
// check if session is on
session_start();

// check if user session is on and remove the session
if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
    header("Location: index.php");
}

header("Location: index.php");
