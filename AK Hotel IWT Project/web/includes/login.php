<?php
    include_once '../header.php';
?>

<header>
    <nav class="navigation">
        <a href="home1.php" class="active">Home</a>
        <a href="about1.php">About Us</a>
        <a href="contact.php">Contact Us</a>
        <a href="#">Rating</a>
    </nav> 

    <?php
    if (isset($_SESSION["userid"])) {
        echo '<span class="pro"><a href="userProfile.php">Hello ' . $_SESSION["usersname"] . '</a></span>';
    } else {
        echo '<button class="btnUser"><a href="login.php"><img src ="src\user.svg" alt="user" width="30px" height="20px" > </a></button>';
    }
    ?>

</header>

<link rel="stylesheet" href="../style/login.css">

<title>LOGIN</title>
</head>
<body>
    <div class="login-box">
        <h2>LOGIN</h2>
        <form action="login.inc.php" method="POST">
            <div class="user-box">
                <input type="text" name="uid" required="">
                <label>Username</label>            
            </div>

            <div class="user-box">
                <input type="password" name="pwd" required="">
                <label>Password</label>
            </div>
            
            <button name="submit" type="submit">Login</button>

            <p>If you are new here, <a href="register.php">register</a></p>
        </form>
    </div>       

<?php
    include_once '../footer.php';
?>
