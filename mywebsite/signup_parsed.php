<?php
include('include/connection.php');

if (empty($_POST['theUserSignup'])) {
    header("Location: signup.php");
}else{
    $baddata = 0;

    $signupUsername= $_POST['theUserSignup'];
    $signupPassword= $_POST['thePasswordSignup'];
    $signupEmail=$_POST['theEmailSignup'];

    $hashed_password = password_hash($signupPassword, PASSWORD_DEFAULT);


    $query1 = "SELECT * FROM users_list WHERE user_name = :signupUsername";
    $statement=$db->prepare($query1);
    $statement->bindValue(":signupUsername", $signupUsername);
    $statement->execute();
    $all_queries1=$statement->fetchAll();
    $statement->closeCursor();

    $arrayLength = count($all_queries1);


    if ($arrayLength != 0) {
        $baddata = 1;
    } else {
        $query2= "INSERT INTO users_list (user_name, password_hashed, user_email, user_status) 
        VALUES (:signupUsername, :hashed_password, :signupEmail, '2')";

        $statement=$db->prepare($query2);
        $statement->bindValue(':signupUsername', $signupUsername);
        $statement->bindValue(':hashed_password', $hashed_password);
        $statement->bindValue(':signupEmail', $signupEmail);
        $statement->execute();
        $statement->closeCursor();

        echo("<script>window.location.replace('logIn.php');</script>");
    }
    if ($baddata == 1) {
        include ("signup.php");
    }

}


?>
