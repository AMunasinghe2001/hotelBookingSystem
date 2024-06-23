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

<link rel="stylesheet" href="style/home1.css">
<script src="script/home1.js"></script>

<title>AK HOTEL</title>

</head>
<body>

   
        <h1 id ="topic1">AK HOTEL</h1>
        <h1 id ="dis1">FOR YOUR PLEASURE</h1>
   
    <div class="topImg">
    
    <div class="slideshow-container">
    <img src="src/hotel1.jpeg" alt="Image 1">
        <<div class="slide">
          <img src="src/hotel1.jpeg" alt="Image 1">
        </div>
        <div class="slide">
          <img src="src/hotel2.jpeg" alt="Image 2">
        </div>
        <div class="slide">
          <img src="src/hotel3.jpeg" alt="Image 3">
        </div>
        <div class="slide">
            <img src="src/hotel4.jpeg" alt="Image 4">
        </div>
          
      </div>
    




      
      
      <div class="searchBar"> 
        <input id="searchbar" onkeyup="search_roomType()" type="text" name="search" placeholder="Search ...">
        
        <select id="city">
           
               <option value=" ">Select Room Type</option>
               <option value="luxury">luxury Room</option>
               <option value="semiLuxury">Semi-Luxury Room</option>
               <option value="normalRoom">Normal Room</option>
           </select>
           <button onclick="search_roomType()"  id="searchBtn">Search</button>
           
       </div>

        
        
        
        
        
	
    <div class = lands>
        
        <div class = l1 >
            <div class = text>
                <p>Available</p>
            </div>
            <img src ="src\luxury.jpeg"  width ='400px' hight = '800px'>
            <span>Luxury Room</span>
            <p> <img src ="src\dollar.png">LKR 5 000/= [per day]</p>
            <p> <img src ="src\wifi.png">Free Wi-Fi Available <img src ="src\available.png"> </p>
            <p> <img src ="src\parking.png">Parking Available <img src ="src\available.png"> </p>
            <p> <img src ="src\ac.png">A/C Available <img src ="src\available.png"> </p>
                
        </div>


        <div class = l1 >
            <div class = text>
                <p>Available</p>
            </div>
            <img src ="src\semiLuxuryRoom.jpeg"  width ='400px' hight = '800px'>
            <span>Semi-Luxury Room</span>
            <p> <img src ="src\dollar.png">LKR 3 000/= [per day]</p>
            <p> <img src ="src\wifi.png">Free Wi-Fi Available <img src ="src\available.png"> </p>
            <p> <img src ="src\parking.png">Parking Available <img src ="src\available.png"> </p>
            <p> <img src ="src\ac.png">A/C Available</p>
        </div>


        <div class = l1 id="srce" ></p>
            <div class = text></p>
                <p>Available</p>
            </div>
            <img src ="src\Normal_room.jpeg" width ='400px' hight = '800px'>
            <span>Normal Room</span>
            <p> <img src ="src\dollar.png">LKR 2 000/= [per day]</p>
            <p> <img src ="src\wifi.png">Free Wi-Fi Available </p>
            <p> <img src ="src\parking.png">Parking Available <img src ="src\available.png"> </p>
            <p> <img src ="src\ac.png">A/C Available </p>
        </div>



    </div>



<div>
    <h1 id ="topic1">CHECK IN</h1>
        <h1 id ="dis2">YOU ARE OUR WEALTH!</h1>
</div>
<br>
   <br>


   
   <?php
    include_once 'footer.php';
?>
