<?php
include_once('include/connection.php');
    if (isset($_POST['submit'])==NULL) {
        $theError = '';
        $baddata = 2;
    }

    if ($baddata == 1) {
        $theError = 'Either the  username or password is incorrect';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <title>LogIn</title>
</head>
<body>
    <p>Admin:</p>
    <p>user: Boss99<br>pass: Bossboss99</p>
    <p>Ordinary user:</p>
    <p>user: Boss77<br>pass: Bossboss77</p>
    <div id="errorDisplay"><?php echo $theError; ?></div>
    <div class="logInBox">
        <img id="userLogo" src="images/user_logo.jpg" alt="user logo">
        <h1>Log-In Here</h1>
        <form  action="login_parsed.php" method="post">
        <label for="theUser">UserName <input type="text" name="theUser" placeholder="Type UserName here:" required><br></input></label>
        <label for="thePassword">Password <input id="thePassword" type="password" name="thePassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Type Password here:" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br></input></label>
            <div class="eye" onclick="showPass()">
                <div class="shut">
                <span></span>
                </div>
                <div class="ball">
                    <img src="images/logo.png" alt="logo">
                </div>
            </div>
            <span id="showPassText">Show Password</span>
        <input id="submitBt" type='submit' name='submit'>
    <p><a href="#">Lost your password?</a></p>
    <p><a href="signup.php">Don't have an account?</a></p>


</form></div>

<script src="js/menu.js"></script>
<script src="js/showPass.js"></script>
</body>
</html>
