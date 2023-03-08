<?php
	require_once('include/connection.php');
	session_start();
	$theUserToBeUpdated=$_POST["pickingUser"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/update_users_form.css">
    <title>Update User details:</title>
</head>
<body>
    

<?php 
	include("include/header.php"); 
	include("include/nav.php"); 
?> 
<?php
					$query="SELECT * FROM users_list WHERE user_name = :theUserToBeUpdated";
					$statement=$db->prepare($query);
					$statement->bindValue(":theUserToBeUpdated", $theUserToBeUpdated);
					$statement->execute();
					$userDetails=$statement->fetch();
					$statement->closeCursor();
				?>
                <form id="upform" name="upform" action="update_users_parsed.php" method="post">
					<label>User ID:</label>
					<input type="number" id="the_user_id" name="the_user_id" readonly value="<?php echo $userDetails['ID']; ?>"><br><br>
					

					<label>User Username:</label>
					<input type="text" id="the_user_username" name="the_user_username" required value="<?php echo $userDetails['user_name']; ?>"><br><br>
					
					<label>User Password:</label>
					<input type="password" id="the_user_password" name="the_user_password" required value="<?php echo $userDetails['password_hashed']; ?>"><br><br>
					
                    <label>User Email:</label>
					<input type="email" id="the_user_email" name="the_user_email" required value="<?php echo $userDetails['user_email'];  ?>"><br><br>

					<label>User Status:</label>
					<input type="number" id="the_user_status" name="the_user_status" min="1" max="2" step="1" required value="<?php echo $userDetails['user_status'];  ?>"><br><br>
                    
                    <input class="btn" type="reset" value="Reset the Form">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="btn" type="submit" value="UPDATE the Customer Record">					
				</form>
				<script src="js/menu.js"></script> 
				</body>
</html>