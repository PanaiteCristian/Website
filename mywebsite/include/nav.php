<?php

	if (empty($_SESSION['login_user'])) {
		header("Location: login.php");
		exit;
	}  
?>

<div id="menu">
            <div id="menu-bar" onclick="menuOnClick()">
              <div id="bar1" class="bar"></div>
              <div id="bar2" class="bar"></div>
              <div id="bar3" class="bar"></div>
            </div>
            <nav class="nav" id="nav">
              <ul>
                <?php if( $_SESSION['user_status']==1): ?>
                <li><a href="index_admin.php">Home</a></li>
                <?php else: ?>
                <li><a href="index_ordinary.php">Home</a></li>
                <?php endif; ?>
                <li><a href="signup.php">SignUp</a></li>
                <?php if( $_SESSION['login_user']): ?>
                <li><a href="logout.php">LogOut</a></li>
                <?php else: ?>
                <li><a href="login.php">LogIn</a></li>
                <?php endif; ?>
                <li><a href="chat.php">Chat</a></li>
                

              </ul>
            </nav> 
          </div>
          <div class="menu-bg" id="menu-bg"></div>
    </nav>
    