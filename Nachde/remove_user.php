<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Remove User</h2>
        <form action="remove_user_process.php" method="POST">
            <label for="user_id">Enter User ID to Remove:</label>
            <input type="text" id="user_id" name="user_id" required><br><br>
            <input type="submit" name="submit" value="Remove">
        </form>
    </div>
</body>
</html>