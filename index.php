<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLL LIFE BANK</title>
    <link rel="stylesheet" href="css/rlb.css">
    <link rel="shortcut icon" href="images/RLB.png" type="image/x-icon">
</head>
<body>
    <div class="main"> 

        <!-- logo section -->
        <div class="logo">
            <img src="images/RLB GREEN.png" alt="">
        </div>

        <!-- Login container section -->
        <div class="login-form"> 
            <form method="POST" action="login_process.php">
                <div class="inp">
                    <input name="account_no" class="my-input" placeholder="Email or Account No" type="text"> 
                </div>
                <div class="inp">
                    <input name="password" class="my-input" placeholder="Password"  type="password"> 
                </div>
                <div class="inp">
                    <button type="submit">Login </button>
                </div>
                <div class="inp">
                    <button><a href="register.php">Create Account</a></button>
                </div>    
            </form>

        </div>

    </div>
</body>
</html>