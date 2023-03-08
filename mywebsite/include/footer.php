
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	

<div class="footer-basic">
	<footer>
	<div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
				<ul class="list-inline">
					<?php if( $_SESSION['user_status']==1): ?>
					<li class="list-inline-item"><a class="a-fix" href="index_admin.php">Home</a></li>
					<?php else: ?>
					<li class="list-inline-item"><a class="a-fix" href="index.php">Home</a></li>
					<?php endif; ?>
					<li class="list-inline-item"><a class="a-fix" href="signup.php">SignUp</a></li>
					<?php if( $_SESSION['user_status']==1): ?>
					<li class="list-inline-item"><a class="a-fix" href="update_users.php">Update users</a></li>
					<?php else: ?>
					<li class="list-inline-item"><a class="a-fix" href="update_users.php">Users list</a></li>
					<?php endif; ?>    
					<?php if( $_SESSION['login_user']): ?>
					<li class="list-inline-item"><a class="a-fix" href="logout.php">LogOut</a></li>
					<?php else: ?>
					<li class="list-inline-item"><a class="a-fix" href="login.php">LogIn</a></li>
					<?php endif; ?>
					<li class="list-inline-item"><a class="a-fix" href="chat.php">Chat</a></li>
					

				</ul>
				<p class="copyright">HomeStudio © 2018</p>
			</footer>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	
</footer>