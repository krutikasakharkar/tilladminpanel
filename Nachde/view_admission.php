<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Admission</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h2>Admission Details</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Phone</th>
            <th>Dance style</th>
            <th>Payment method</th>
            <th>Address</th>

        </tr>
        <?php
        // Database connection
        include "connection.php";
        // Retrieve all members
        $sql = "SELECT * FROM admission";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["dob"] . "</td>"; 
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["dance_style"] . "</td>";
                echo "<td>" . $row["payment_method"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>