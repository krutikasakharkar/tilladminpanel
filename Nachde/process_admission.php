<?php
    include "connection.php";

// Process form submission
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $dance_style = mysqli_real_escape_string($conn, $_POST['dance_style']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Insert data into database
    $sql = "INSERT INTO admission (name, email, dob, phone, dance_style, payment_method, address)
            VALUES ('$name', '$email', '$dob', '$phone', '$dance_style', '$payment_method', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>