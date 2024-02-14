<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update admission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Update Admission</h2>
        <form action="update_admission_process.php" method="POST">
            <label for="admission_id">Enter Admission ID to Update:</label>
            <input type="text" id="admission_id" name="admission_id" required><br><br>
            <label for="name">New name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">New email:</label>
            <input type="text" id="email" name="email" required><br><br>
            <label for="dob">New DOB:</label>
            <input type="date" id="dob" name="dob" required><br><br>
            <label for="phone">New Phone.No:</label>
            <input type="tel" id="phone" name="phone" required><br><br>
            <label for="dance_style">Select Dance Style:</label><br>
            <select id="dance_style" name="dance_style" required>
                <option value="bollywood">Bollywood</option>
                <option value="hip_hop">Hip Hop</option>
                <option value="contemporory">Contemporory</option>
            </select><br>
                <label for="payment_method">Payment Method:</label><br>
            <select id="payment_method" name="payment_method" required>
                <option value="credit_card">Credit Card</option>
                <option value="debit_card">Debit Card</option>
                <option value="paypal">PayPal</option>
            </select><br>
    

            <label for="address">New Address:</label>
            <input type="text" id="address" name="address" required><br><br>
            <input type="submit" name="submit" value="Update">

        </form>
    </div>
</body>
</html>