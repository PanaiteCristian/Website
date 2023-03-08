
<?php
    session_start();
    if (($_SESSION['user_status'])==1) {
		header("Location: index_admin.php");
		exit;
	}  
?>


<?php
require_once('include/connection.php');
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
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/admin9.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="print" href="css/print.css">
    <title>FirstPage</title>
    
    
</head>
    <body class="main-content">
    <?php
        include('include/header.php');
        include('include/nav.php');
    ?>
    <h1 class="theUser">Welcome, <span class="theName"><?php echo $_SESSION['login_user'] . "!"?></span> You have successfully signed in as User</h1>
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="images/hero.png" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hi, I'm <span>Cristian Panaite.</span>
                    A Web Developer.
                </h1>
                <p>
                    I'm a Web Developer, I love to create beautiful and functional websites.
                    <br>Together we can make a better tomorrow!
                </p>
                <div class="btn-con">
                    <a href="assets/CristianPanaiteCV2022.pdf" class="main-btn" download>
                        <span class="btn-text">Download CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>About me</h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information about me</h4>
                    <p>
                        I'm a 'young' programmer that is obsessed in finding
                        new ways to make the world a better place.<br>A.I. can be
                        the best way of keeping our planet heathy and clean.
                        <br><br>Take a deep breath... Do you feel like we live
                        in a <a href="https://en.wikipedia.org/wiki/Pollution"><span class="green_text">Clean World?</span></a> 
                        
                    </p>
                    <div class="btn-con">
                        <a href="assets/CristianPanaiteCV2022.pdf" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">Master</p>
                            <p class="small-text">Python<br>Java<br>Javascript<br>PHP<br>mySql <br /> Html<br>CSS</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">Knowledge</p>
                            <p class="small-text">of hardware fix Experience...<br>All my electronics</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">Positive thinking</p>
                            <p class="small-text">Looking into AI <br /> Loading... </p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">New IT obsessed</p>
                            <p class="small-text">but fast learner</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">javascript</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Java</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">NodeJS</p>
                        <div class="progress-con">
                            <p class="prog-text">40%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Python</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">My Timeline</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2021 - present</p>
                    <h5>Certificate in programming<span> <a href="https://www.dkit.ie/" target="_blank">Dkit</a></span></h5>
                    <p>
                        Knowledge: Java, Javascript, PHP, mySql, myAdmin<br>HTML, CSS 
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2020-2021</p>
                    <h5>Python<span> <a href="https://www.ecollege.ie/" target="_blank">Ecollege</a></span></h5>
                    <p>
                        Knowledge: Python, GIT, VSCode
                    </p>
                </div>
            </div>
        </section>
        <!-- Ideea from Kevin Powell -->
        <section class="container" id="portfolio">
            <div class="sceneContainer">
            <div class="textArea"><p>
                &emsp; Every day...<br> is an opportunity to learn something new. I'm new in the field but i make improvement every day creating simple apps like a <spam class="gitLink"><a href="github.com">CalculatorApp</a></spam> in Java or simple games in python. 
                    Explore my web-site and feel free to contact me for future collaboration.
                    </p>
                    </div>
                <div class="scene">
                    <div class="floor"></div>
                    <div class="cube">
                        <div id="front"></div>
                        <div id="back"></div>
                        <div id="left"></div>
                        <div id="right"></div>
                        <div id="top">
                            <div class="ballShadow"></div>
                        </div>
                        <div id="bottom"></div>
                    </div>
                    <div class="ball"></div>
                
                </div>
            </div>
                
                
        </section>
        <section class="container" id="users">
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
									<td>" . $one_query['user_status']. "</td>
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
    </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me: </span><span class="bg-text">panaitecristian92@gmail.com</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        <p>
                            I'm looking forward to hear about your question
                            and I do my best to give you a proper answer.<br>
                            Greetings Cristian.
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location:</span>
                                </div>
                                <p class="details-fix">
                                     Ireland
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email:</span>
                                </div>
                                <p class="details-fix">
                                    <span> panaitecristian92@gmail.com</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education:</span>
                                </div>
                                <p class="details-fix">
                                    <span> Bachelor's degree in Engine Mechanical</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Mobile Number:</span>
                                </div>
                                <p class="details-fix">
                                    <span> 078********</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Languages:</span>
                                </div>
                                <p class="details-fix">
                                    <span> Romanian, English, Italian</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="mailto:CristYanEu@gmail.com" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" required placeholder="YOUR NAME">
                                <input type="email" required placeholder="YOUR EMAIL">
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="ENTER SUBJECT">
                            </div>
                            <div class="input-control">
                                <textarea name="" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
                            </div>
                            <input type="submit" value="submit" class="submit-bt">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="users">
            <i class="fas fa-blog"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="js/section_menu.js"></script>
    <script src="js/menu.js"></script>

</body>
</html>