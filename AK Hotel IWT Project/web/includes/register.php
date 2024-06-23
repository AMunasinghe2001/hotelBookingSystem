<?php
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

// Process the registration form data
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];


    // Perform any additional validation or sanitization here

    // Insert data into the "regi" table
    $sql = "INSERT INTO regi (name, email, username, password,pwdrepeat) VALUES ('$name', '$email', '$uid', '$pwd', '$pwdrepeat')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Register successfully');</script>";
        echo "<script>window.location.href = 'RegDisplay.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
