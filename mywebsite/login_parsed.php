<?php
require_once('include/connection.php');

if (empty($_POST['theUser'])) {
    header("Location: login.php");
}else{
    $baddata = 0;

    $username= $_POST['theUser'];
    $password= $_POST['thePassword'];

    $query = "SELECT * FROM users_list WHERE user_name = :theUser";
    $statement=$db->prepare($query);
    $statement->bindValue(":theUser", $username);
    $statement->execute();
    $all_queries=$statement->fetchAll();
    $statement->closeCursor();

    $arrayLenght = count($all_queries);

    if ($arrayLenght != 1) {
        $baddata = 1;
    }else{
        foreach($all_queries as $one_query):
            $stored_hashed_password = $one_query['password_hashed'];
            $dbUserStatus = $one_query['user_status'];
        endforeach;

        $verify = password_verify($password,$stored_hashed_password);

        if($verify) {
            session_start();
            $_SESSION['login_user'] = $username;
            $_SESSION['user_status'] = $dbUserStatus;

            if($dbUserStatus == 1) {
                header("Location: index_admin.php?user=" . $_SESSION['login_user'] . "ADMINISTRATOR");
            }if($dbUserStatus == 2) {
                header("Location: index_ordinary.php?user=" . $_SESSION['login_user'] . "ORDINARY");
            }
            exit;
        }else {
            $baddata = 1;
        }

        if($baddata == 1) {
            include("login.php");
        }
    }
}

?>