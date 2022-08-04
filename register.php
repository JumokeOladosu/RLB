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
        <div class="form"> 
            <form method="POST" action="register_process.php">
                <div class="inp">
                    <input required="" name="full_name" class="my-input" placeholder="Full Name" type="text"> 
                </div>
                <div class="inp">
                    <input required="" name="email_address" class="my-input" placeholder="Email Address"  type="email"> 
                </div>
                <div class="inp">
                    <input required="" name="password" class="my-input" placeholder="Password"  type="text"> 
                </div>
                <div class="inp">
                    <button type="submit">Register </button>
                </div>
                <div class="inp">
                    <a href="index.php">Login Now</a>
                </div>    
            </form>

        </div>

    </div>
</body>
</html>