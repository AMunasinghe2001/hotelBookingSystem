<?php
include_once '../header.php';
include_once './Connection.php';

// Function to fetch user data
function fetchUserData($conn)
{
    $sql = "SELECT * FROM regi WHERE id = (SELECT MAX(id) FROM regi)";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '
        <div class="user-box">
            <input type="text" name="name" value="' . $row['name'] . '">
            <label>Name</label>
        </div>

        <div class="user-box">
            <input type="text" name="email" value="' . $row['email'] . '">
            <label>Email</label>
        </div>

        <div class="user-box">
            <input type="text" name="uid" value="' . $row['username'] . '">
            <label>Username</label>
        </div>

        <div class="user-box">
            <input type="text" name="pwd" value="' . $row['password'] . '">
            <label>Password</label>
        </div>

        <div class="user-box">
            <input type="text" name="pwdrepeat" value="' . $row['pwdrepeat'] . '">
            <label>Repeat Password</label>
        </div>

        <button type="submit" name="update_btn">Update</button>
        ';
    } else {
        echo "No data found";
    }
}
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
        echo '<button class="btnUser"><a href="login.php"><img src="src\user.svg" alt="user" width="30px" height="20px" > </a></button>';
    }
    ?>
</header>

<link rel="stylesheet" href="../style/login.css">

<title>Update</title>
</head>

<body>
    <div class="login-box">
        <h2>Update Details</h2>
        <form action="update_process.php" method="POST">
            <?php
            // Fetch and display user data
            fetchUserData($conn);
            ?>
        </form>
    </div>

<?php
include_once '../footer.php';
?>
