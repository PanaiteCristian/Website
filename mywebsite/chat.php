
<?php
require_once('include/connection.php');
    session_start();
    if (($_SESSION['user_status'])==1) {
		header("Location: delete_msg.php");
		exit;
	}  

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<?php
        include('include/nav.php');
        include('include/connection.php');
        include('include/header.php');
    ?>
<body>
    <button class="open-button" onclick="openForm()">Chat</button>
    <div class="chat-popup" id="myForm">
        <form action="chat_parsed.php" class="form-container" method="post">
          <h1>Chat</h1>
      
          <label for="msg"><b>Message</b></label>
          <label for="username"></label><input type="text" disabled placeholder="<?php echo $_SESSION['login_user']?>">
          <textarea placeholder="Type message.." name="msg" required></textarea>
          <button type="submit" class="btn">Send</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
      <?php
					$query="SELECT user_name, user_comment, comment_time FROM user_comments ORDER BY comment_id DESC";
					$statement = $db->prepare($query);
					$statement->execute();
					$all_queries=$statement->fetchAll();
					$statement->closeCursor();
        
        echo "<div class='msg-history'>";
          
          foreach($all_queries as $one_query) :

        echo "<div class='incoming-msg-section'>
          <div class='incoming-msg-img'>
            <span id='message_username'>" . $one_query['user_name'] . "
            <img id='user_image' src='images/user_logo.jpg' alt='user_Image'>
          </div>
          <div class='incoming-msg-content'>
            <div class='msg-card'>
              <div class='msg-body'>
                <p class='message'>" . $one_query['user_comment'] . 
                "</p>
              </div>
              <span class='time_date'>" . $one_query['comment_time'] . " </span>
            </div>
          </div>";
        

			endforeach;
      echo "</div>"
      ?>

<hr>      
<?php
    include('include/footer.php');
?>
      <script>
        export default {
        name: 'MessageHistory'
        }
      </script>

      <script src="js/open_chat.js"></script>
      <script src="js/close_chat.js"></script>
      <script src="js/menu.js"></script>

</body>
</html>