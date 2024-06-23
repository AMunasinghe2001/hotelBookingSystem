<!DOCTYPE html>

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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AK Hotel-About Us</title>
    <link rel="stylesheet" href="style\about1.css">
</head>
<body>

<?php
    include_once 'header.php';
?>

<div class="body">
<div class="h1"> <h1>About us</h1></div> 
    <br>
    <br>    
    <div class="table"> 
        <table>
        <tr>
            <th>Our vision</th>
            <th>Our Mission</th>
            
        </tr>
        
        <tr>
            <th><br>The ideology of our vision is to continue to apply and set the highest standards of service quality and in that way justify and uphold the reputation that we have among the guests, partners, competitors and the wider community. 
                We use and constantly introduce environmentally friendly technologies and processes in order to remain in balance with nature and also meet the needs of contemporary society.
                Tradition is a testament to our success but in the future we also want to embrace the changes that modern time brings and become more attractive in the market and more interesting to our guests and partners.<br><br></th>
            <th><br>The mission of the Hotel Grand is to put hospitality services on the highest level in order to satisfy the demands and expectations of guests. Our aim is to make the Hotel Grand a place for encounters, business success, pleasant meetings and gala ceremonies.</th>
        </tr>
        
    
    </table>  </div> 
    <br>
<div class="margin"><h3 margin-left:20px; >Why Choose Us...</h3>

<br><br>
<div class="p"><p>AK Hotel one of the most attractive hotels in southern province. <br>That it is one of the most popular and famous hotels in the region,<br> is not surprising based on the numerous attractive attributes that are associated with it.<br> Some of the major reasons why booking the hotel is a great idea are highlighted in the passages below.</p> </div></div>

<div class="cet">
<img src="src\cet1.png" width="100px" height="auto" alt="cet1"></div>
<div class="cet1">
<img src="src\cet2.png" width="100px" height="auto" alt="cet2"> </div>


</div>
</body>
</html>
<?php
    include_once 'footer.php';
?>