<?php
include "connection.php";
// Form data
// Form data
$user_id = $_POST['user_id'];

// Delete data from database
$sql = "DELETE FROM users WHERE id='$user_id'";

if ($conn->query($sql) === TRUE) {
    // Redirect to view all users page
    header("Location: view_user.php");
    exit(); // Ensure no more output is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>