<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
		<a href="home1.php" class="active">Home</a>
			<a href="about1.php">About Us</a>
			<a href="contact.php">Contact Us</a>
            <a href="#">Rating</a>
            
        </nav> 
            
            <?php
                if( isset ($_SESSION["userid"] ))
                {
                    echo '<span class="pro"><a href="userProfile.php">Hello '.$_SESSION["usersname"].'</a></span>';
                }
                else{
                    echo '<button class="btnUser"><a href="login.php"><img src ="src\user.svg" alt="user" width="30px" height="20px" > </a></button>';
                    
                }
            ?>
            
    
</header>


<link rel="stylesheet" href="style\contact.css">
<title>contact Us </title>
</head>
<body>
<h1 id ="topic1">Contact Us</h1>



 
     <!--<div class="photo">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.741641049997!2d79.851525!3d6.906047!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25942c30de995%3A0x7bb6baa73b87e32f!2sKollupitiya%20Bus%20Stop!5e0!3m2!1sen!2slk!4v1682229538246!5m2!1sen!2slk" width="500" height="681" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>-->
     <head>
		<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
		<meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
				<link href="css/style.css"rel="stylesheet"type="text/css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	</head>
	<body>
		<div class="contact-wrap">
			<div class="contact-in">
				<h1>Contact Info</h1>
				<h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
				<p>037 1234567</p>
				<h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
				<p>akhoteltangalle@gmail.com</p>
				<h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
				<p>AK Hotel,No.23/4,Beach road,Tangalle</p>
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="contact-in">
				<h1>Send a Message</h1>
				<form>
					<input type="text" placeholder="Full Name" class="contact-in-input">
					<input type="text" placeholder="Email" class="contact-in-input">
					<input type="text" placeholder="Subject" class="contact-in-input">
					<textarea placeholder="Message" class="contact-in-textarea"></textarea>
					<input type="submit" value="SUBMIT" class="contact-in-btn">
				</form>
			</div>
			<div class="contact-in">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.741641049997!2d79.851525!3d6.906047!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25942c30de995%3A0x7bb6baa73b87e32f!2sKollupitiya%20Bus%20Stop!5e0!3m2!1sen!2slk!4v1682229538246!5m2!1sen!2slk" width="500" height="681" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</body>
</html>
