<?php 
    require_once('include/connection.php');

    $the_user_id=$_POST["the_user_id"];
    $the_user_username=$_POST["the_user_username"];
    $the_user_password=$_POST["the_user_password"];
    $the_user_email=$_POST["the_user_email"];
    $the_user_status=$_POST["the_user_status"];

    $query="UPDATE users_list SET
        ID= :the_user_id,
        user_name= :the_user_username,
        password_hashed= :the_user_password,
        user_email= :the_user_email,
        user_status= :the_user_status
    WHERE ID=:the_user_id";

    $statement = $db->prepare($query);

    $statement->bindValue(":the_user_id", $the_user_id);
    $statement->bindValue(":the_user_username", $the_user_username);
    $statement->bindValue(":the_user_password", $the_user_password);
    $statement->bindValue(":the_user_email", $the_user_email);
    $statement->bindValue(":the_user_status", $the_user_status);

    $statement->execute();
    $statement->closeCursor();

    header("Location: index_admin.php");
?>