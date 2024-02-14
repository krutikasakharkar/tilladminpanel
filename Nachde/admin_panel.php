<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a href="index.html"><img src="images/logo.png"></a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="admin_logout.php">LOGOUT</a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>


    <div class="container">
        <h2>Admin panel</h2>
        <div class="actions">
            <button onclick="location.href='add_admission.php'">Add New Admission</button>
            <button onclick="location.href='view_admission.php'">View Admission</button>
            <button onclick="location.href='remove_admission.php'">Remove Admission</button>
            <button onclick="location.href='update_admission.php'">Update Admission</button>

            
            <button onclick="location.href='remove_user.php'">Remove User</button>
            <button onclick="location.href='view_user.php'">View User</button>

            
        </div>
    </div>
</body>
</html>