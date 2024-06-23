<?php
session_start();

if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ak";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM regi WHERE (username = '$uid' OR email = '$uid') AND password = '$pwd'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['userid'] = $row['id'];
        $_SESSION['usersname'] = $row['name'];
        header("Location:RegDisplay.php");
        exit();
    } else {
        echo "<script>alert('Invalid username/email or password. Please try again.');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit();
    }

    // Close the connection
    $conn->close();
} else {
    header("Location: login.php");
    exit();
}
?>
