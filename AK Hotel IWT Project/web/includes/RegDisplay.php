<?php
include_once '../header.php';

// Include the database connection
include_once './Connection.php';

// Function to display the user data with maximum ID
function displayUserData($conn)
{
    $sql = "SELECT * FROM regi WHERE id = (SELECT MAX(id) FROM regi)";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '
        <div class="user-box">
            <input type="text" name="name" readonly value="' . $row['name'] . '">
            <label>Name</label>
        </div>

        <div class="user-box">
            <input type="text" name="email" readonly value="' . $row['email'] . '">
            <label>Email</label>
        </div>

        <div class="user-box">
            <input type="text" name="uid" readonly value="' . $row['username'] . '">
            <label>Username</label>
        </div>

        <div class="user-box">
            <input type="text" name="pwd" readonly value="' . $row['password'] . '">
            <label>Password</label>
        </div>

        <div class="user-box">
            <input type="text" name="pwdrepeat" readonly value="' . $row['pwdrepeat'] . '">
            <label>Repeat Password</label>
        </div>

        <button><a href="Delete.php?delete_id=' . $row['id'] . '">Delete</a> </button>
        <br>
        <button><a href="Display_Update.php?id=<?php echo $id; ?>" class="update">update</a></button>
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

<link rel="stylesheet" href="../style//login.css">

<title>Register</title>
</head>

<body>
    <div class="login-box">
        <h2>Register Details</h2>
        <form action="register.php" method="POST">
            <?php
            // Display the user data with maximum ID
            displayUserData($conn);
            ?>
        </form>
    </div>

<?php
include_once '../footer.php';
?>
