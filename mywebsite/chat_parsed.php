<?php
	session_start();
	if (empty($_SESSION['login_user'])) {
		header("Location: login.php");
		exit;
	}
?>

<?php
    include_once("include/connection.php");
    $username=$_SESSION['login_user'];
    $msg=$_POST["msg"];
    

    $query="INSERT INTO user_comments (user_name, user_comment) VALUES
    (:user, :msg)";

    $statement = $db->prepare($query);

    $statement->bindValue(":user", $username);
    $statement->bindValue(":msg", $msg);
    $statement->execute();
    $statement->closeCursor();
    header("Location: chat.php");
?>


