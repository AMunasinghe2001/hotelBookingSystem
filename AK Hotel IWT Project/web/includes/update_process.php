<?php
include_once './Connection.php';

if (isset($_POST['update_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    // Update the user data
    $sql = "UPDATE regi SET name='$name', email='$email', username='$username', password='$password', pwdrepeat='$pwdRepeat' WHERE id = (SELECT MAX(id) FROM regi)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data updated successfully');</script>";
        echo "<script>window.location.href = 'RegDisplay.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
