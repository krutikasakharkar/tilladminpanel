<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h2>User Details</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>

        </tr>
        <?php
        // Database connection
        include "connection.php";
        // Retrieve all users
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["password"] . "</td>"; 
                
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>