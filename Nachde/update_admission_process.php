<?php
include "connection.php";

// Form data
$admission_id = $_POST['admission_id'];
$new_name = $_POST['name'];
$new_email = $_POST['email'];
$new_dob = $_POST['dob'];
$new_phone = $_POST['phone'];
$new_dance_style = $_POST['dance_style'];
$new_payment_method = $_POST['payment_method'];
$new_address = $_POST['address'];

// Update data in database
$sql = "UPDATE admission SET name='$new_name', email='$new_email', dob='$new_dob', phone='$new_phone', dance_style='$new_dance_style', payment_method='$new_payment_method', address='$new_address' WHERE id='$admission_id'";

if ($conn->query($sql) === TRUE) {
    echo "Admission information updated successfully";
    header("Location: view_admission.php");
    exit(); // Ensure no more output is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
