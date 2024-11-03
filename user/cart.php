<?php
include('../home/header.php');
?>

<?php
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    mysqli_query($conn, "DELETE FROM cart WHERE id=$id");
    if (isset($_SESSION['cart_count']) && $_SESSION['cart_count'] > 0) {
        $_SESSION['cart_count'] -= 1;
    }
    header('location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/cart.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Shopping Cart</title>
</head>
<body>

    <div class="container">
        <!-- Panier Section -->
        <div class="cart-section">
            <center><h3>Shopping Cart</h3></center>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM cart");
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <!--- cart start--->
            <div class="cart-item">
                    <img src="../images/<?php echo $row['image']; ?>"
                    alt="<?php echo $row['name']; ?>" class="product-image">
                <div class="product-details">
                    <p class="product-name"><?php echo $row['name']; ?></p>
                    <p class="product-des"><?php echo $row['des']; ?></p>
                    <p class="product-price" data-price="<?php echo $row['price']; ?>">
                        <?php echo $row['price']; ?></p>
                        <p class="product-size"><?php echo $row['size']; ?></p>
                    <!--- cart End--->
                    <!--- quantity start--->
                    <div class="qua-input">
                        <button class="count-mins">-</button>
                        <input type="number" class="quantity-input" value="1" min="1" max="10" data-id="<?php echo $row['id']; ?>" data-price="<?php echo $row['price']; ?>">
                        <button class="count-add">+</button>
                    </div>
                    <!--- quantity End--->
                     <!--- delete start--->
                    <form method="POST" action="">
                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <!--- delete End--->
                </div>
            </div>
            <!--- cart End--->
            <?php
            }
            ?>
        </div>
        <!-- Cart Summary  start-->
        <div class="summary-section">
            <h3>Cart Summary</h3>
                <div class="summary-details">
                    <p id="total-items"> Items in the cart: 0</p>
                    <p id="total-price">Total: 0 MAD</p>
                    <!--btn-->
                    <form action="payment.php" method="post">
                        <button type="submit" class="btn btn-payment">Process Payment</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Cart Summary  End-->
    <!---javascript----->
<script type="text/javascript" src="../script/cart.js"></script>
    <!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>

