<?php
// Check if the form is submitted
if(isset($_POST['submit'])){
    // Include the database connection file
    include "connection.php";

    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    // Check if username or email already exists
    $sql = "SELECT * FROM admin WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo '<script>
        alert("User already exists!!!");
        window.location.href = "admin_signup.php";
        </script>';
        exit(); // Exit the script if user already exists
    }

    // Check if passwords match
    if($password != $cpassword){
        echo '<script>
        alert("Passwords do not match!!!");
        window.location.href = "admin_signup.php";
        </script>';
        exit(); // Exit the script if passwords do not match
    }

    // Hash the password
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into admin table
    $sql = "INSERT INTO admin (name, username, email, phone, password) VALUES ('$name', '$username', '$email', '$phone', '$hash')";
    if(mysqli_query($conn, $sql)){
        header("Location: admin_login.php");
        exit(); // Exit the script after successful insertion
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn); // Close the database connection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Sign Up</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
    include "navbar.php";
?>

<div id="form">
<h1>Signup</h1>
<form name="form" action="admin_signup.php" method="POST">
<label>Enter Name</label>
<input type="text" id="name" name="name" required><br><br>
<label>Enter Username</label>
<input type="text" id="username" name="username" required><br><br>
<label>Enter Email</label>
<input type="email" id="email" name="email" required><br><br>
<label>Enter Phone number</label>
<input type="tel" id="phone" name="phone" required><br><br>
<label>Enter Password</label>
<input type="password" id="password" name="password" required><br><br>
<label>Retype Password</label>
<input type="password" id="cpassword" name="cpassword" required><br><br>
<input type="submit" id="btn" value="Signup" name="submit"/>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



