
<?php
session_start();
include('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/product.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Shopping</title>
</head>
<body>

    <!-----------------------header start--------------------------------->
    <header>
        <!-------logo start------->
        <div class="logo">
            <h1>Electro.</h1>
            <img src="image/cart.png"><h2>Shop</h2>
        </div>
        <!---------logo end------->
        <!-------search start------->
        <div class="search">
            <div class="search-bar">
                <form action="" method="get">
                    <input type="text" class="search-input" name="" placeholder="Enter a word to search">
                    <button class="butt" name="btn">Search</button>
                </form>
            </div>
        </div>
        <!---------search end------->
    </header>
    <!------------------------header End-------------------------------->

    <!----------------------nav start-------------------------------->
    <nav>
            <!---categories-->
            <nav>
                <div id="mainbox" onclick="openFunction()">&#9776;Categories</div>
                <div id="menu" class="sidemenu">
                    <a href="index.php" id="active">Home</a>
                    <a href="index.php?category=Comp">Computers</a>
                    <a href="index.php?category=Phon">Phones</a>
                    <a href="index.php?category=Tele">Televisions</a>
                    <a href="index.php?category=Acce">Accessories</a>
                    <a href="index.php?category=Other">Other Devices</a>
                    <a class="closebtn" onclick="closeFunction()">&times;</a>
                </div>
            </nav>
        <!----cart start-->
        <div class="cart">
            <ul>
                <li class="cart-icon">
                    <a href="cart.php"><i class="fa-solid fa-shopping-cart"></i></a>
                    <span class="cart-count">
                        <?php echo isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0; ?>
                    </span>
                </li>
                <li><a href="../account/signup.php"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </div>
        <!----cart end-->
    </nav>
    <!------------------------nav End-------------------------------->
    <!----------javascript----------->
    <script type="text/javascript" src="../script/header.js"></script>
    <script type="text/javascript" src="../script/index.js"></script>
    <!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>

