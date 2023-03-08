<?php
require_once('include/connection.php');
    session_start();
    if (($_SESSION['user_status'])==2) {
		header("Location: users_details.php");
		exit;
	}  

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/update_users.css">
    <title>Update users</title>
</head>
<body>
<?php
        include('include/nav.php');
        include('include/header.php');
    ?>
    <form id="theForm4" name="theForm4" action="update_users_form.php" method="post">
        <label>Pick ONE User:</label>
        <select id="pickingUser" name="pickingUser" required>
            <option value="">.........Pick a User..........</option>
            <?php
                $query="SELECT user_name, user_email, user_status FROM users_list ORDER BY ID ASC";
                $statement= $db->prepare($query);
                $statement->execute();
                $all_queries=$statement->fetchAll();
                $statement->closeCursor();

                foreach($all_queries as $one_query):
                    echo "<option value='" . $one_query['user_name'] . "'>" . $one_query['user_email'] . ", " . $one_query['user_status'] . 
                    "</option>";
                endforeach;						
                ?>
        <input class="btn" type="reset" value="Reset the Selection List">
        <input class="btn" type="submit" value="UPDATE This Customer's Data"><br>

        <?php
					$query="SELECT * FROM users_list ORDER BY ID DESC";
					$statement = $db->prepare($query);
					$statement->execute();
					$all_queries=$statement->fetchAll();
					$statement->closeCursor();

					$howManyRecords=0;

					echo"<table id='users_table' border='1'>
						<tr>
							<th>User ID:</th>
							<th>Username:</th>
							<th>Password:</th>
							<th>Email:</th>
							<th>Status:</th>
						</tr>";
					foreach($all_queries as $one_query) :
						echo	"<tr>
									<td>" . $one_query['ID'] . "</td>
									<td>" . $one_query['user_name'] . "</td>
									<td>" . $one_query['password_hashed'] . "</td>
									<td>" . $one_query['user_email'] . "</td>
									<td>" . $one_query['user_status'] . "</td>
								</tr>";
								$howManyRecords++;

					endforeach;
	echo "</table>";

	if($howManyRecords==1){
		echo"<p class='postGrid'>There is ". $howManyRecords . " record in this Query";
	}else{
		echo"<p class='postGrid'>There are ". $howManyRecords . " records in this Query";
	}
				?>
				
	<script src="js/menu.js"></script>   			
        
    </form>
</body>
</html>