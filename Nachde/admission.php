<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dance Class Admission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Dance Class Admission Form</h1>

<form action="process_admission.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob" required><br>

    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone" required><br>

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

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" rows="4" required></textarea><br>


    <input type="submit" name="submit" value="Pay now">

</form>

</body>
</html>

