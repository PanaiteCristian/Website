<?php
require_once('include/connection.php');
    session_start();
    if (($_SESSION['user_status'])==1) {
		header("Location: update_users.php");
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
    <link rel="stylesheet" href="css/users_details.css">
    <title>Update users</title>
</head>
<body>
<?php
        include('include/nav.php');
        include('include/header.php');
?>

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
							<th>Email:</th>
							<th>Status:</th>
						</tr>";
					foreach($all_queries as $one_query) :
						echo	"<tr>
									<td>" . $one_query['ID'] . "</td>
									<td>" . $one_query['user_name'] . "</td>
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