<?php
if(isset($_POST['submit'])){
    include "connection.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "select * from users where username = '$username' or email='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row){
        if(password_verify($password, $row["password"])){
            header("Location: admission.php");
        }
    } 
    else{
        echo '<script>
                alert("Invalid username/email or password!!");
                window.location.href = "login.php";
                </script>';
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include "navbar.php";
  ?>
    <div id="form">
        <h1>Login</h1>
        <form name="form" action="login.php"method="POST">
            <label>Enter Username/Email</label>
            <input type="text" id="username" name="username" required><br><br>
            <label>Enter Password</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" id="btn" value="Log in" name="submit"/>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>