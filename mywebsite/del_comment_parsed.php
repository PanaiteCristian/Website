<?php
    require_once('include/connection.php');

    $whichComment=$_POST["whichComment"];

    $query=" DELETE FROM user_comments where comment_id = :whichComment";
    
    $statement=$db->prepare($query);

    $statement->bindValue(":whichComment", $whichComment);

    $statement->execute();
    $statement->closeCursor();

    header("Location: chat.php");
?>