<?php
// Include Connection PHP File
require_once 'connection.php';

// Check if the delete_id parameter exists in the URL
if (isset($_GET['delete_id'])) {
    $deleteID = $_GET['delete_id'];

    // Check if the confirmation parameter is set and true
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        // Delete the record from the database
        $sql = "DELETE FROM regi WHERE id = '$deleteID'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data deleted successfully');</script>";
            echo "<script>window.location.href = 'RRegister.php';</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // Display confirmation message and buttons using JavaScript
        echo "<script>";
        echo "var confirmation = confirm('Are you sure you want to delete this record?');";
        echo "if (confirmation) {";
        echo "    window.location.href = 'delete.php?delete_id=$deleteID&confirm=true';";
        echo "} else {";
        echo "    window.location.href = 'display.php';";
        echo "}";
        echo "</script>";
        exit();
    }
} else {
    echo "delete_id parameter is missing in the URL";
}

// Close the database connection
$conn->close();
?>
