<?php
include('../home/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/payment.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <!--------checkout start--------------->
    <div class="payment-container">
        <h2>Complete Payment</h2>
        <!-------------name---------->
        <form action="process_payment.php" method="post"> 
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="Name" name="Name" required>
            </div>
            <!-------------email------------>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <!-------------address---------->
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <!-------------number---------->
            <div class="form-group">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card_number" maxlength="16" required>
            </div>
            <!----------date--------------->
            <div class="form-group">
                <label for="expiry-date">Card Expiry Date:</label>
                <input type="text" id="expiry-date" name="expiry_date" placeholder="MM/YY" required>
            </div>
            <!------cvv---------->
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" maxlength="3" required>
            </div>

            <button type="submit" class="btn btn-payment">Complete Payment</button>
        </form>
    </div>
     <!--------checkout start--------------->
</body>
</html>

<?php
include('../home/footer.php');
?>

