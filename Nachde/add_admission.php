<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add admission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Add Admission</h2>
        <form action="process_admission.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>


            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>


            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="dance_style">Select Dance Style:</label><br>
            <select id="dance_style" name="dance_style" required>
                <option value="bollywood">Bollywood</option>
                <option value="hip_hop">Hip Hop</option>
                <option value="contemporory">Contemporory</option>
        <!-- Add more options as needed -->
            </select><br>

            <label for="payment_method">Payment Method:</label><br>
            <select id="payment_method" name="payment_method" required>
                <option value="credit_card">Credit Card</option>
                <option value="debit_card">Debit Card</option>
                <option value="paypal">PayPal</option>
        <!-- Add more options as needed -->
            </select><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br><br>

            <input type="submit" name="submit" value="Submit">

        </form>
    </div>
</body>
</html>