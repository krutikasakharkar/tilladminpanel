<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Admission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Remove Admission</h2>
        <form action="remove_admission_process.php" method="POST">
            <label for="admission_id">Enter admission ID to Remove:</label>
            <input type="text" id="admission_id" name="admission_id" required><br><br>
            <input type="submit" name="submit" value="Remove">
        </form>
    </div>
</body>
</html>