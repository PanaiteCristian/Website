<?php
    if (isset($_POST['submit'])==NULL) {
        $theError='';
        $baddata = 2;
    }

    if ($baddata==1) {
        $theError = 'This account already exist: Try again!';
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <title>Sign-Up</title>
</head>
<body>
    
    <div id='errorDisplay'><?php echo $theError;?></div>

    <div class="signUpBox">
        <img id="userLogo" src="images/user_logo.jpg" alt="user logo">
        <h1>Sign-Up Here</h1>
        <form  action="signup_parsed.php" name="signup_form" method="post">
            <label for="user_name">UserName <input type="text" name="theUserSignup" placeholder="Type Username here:" required><br></input></label><br>
            <label for="user_email">E-mail <input type="email" id="user_email" name="theEmailSignup" placeholder="Type E-mail here: " 
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></label><br><br>
            <label for="thePassword">Password <input id="thePassword" type="password" name="thePasswordSignup" placeholder="Type Password here:" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or max 12 characters" required><br></input></label><br>
            <label for="retype_password">Retype password <input id="retype_password" type="password" name="thePasswordSignup"  placeholder="Retype Password here:" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or max 12 characters" required><br></input></label>            
            <br><br>
            <input id="signUpBt" type='submit' name='submit'>
            <p class="logIn"><a href="logIn.php">Have an account already? LogIn here!</a></p>
        </form></div>

<script src="js/menu.js"></script>
<script src="js/index.js"></script>
</body>
</html>