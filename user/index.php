<?php
include('../home/header.php');
?>

<!-----------------------main start-------------------------------->

<main>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM admin");
    while ($row = mysqli_fetch_array($result)) {
    ?>

    <div class="product">
        <!--img-->
        <div class="product-img">
            <a href="product.php?id=<?php echo $row['id']; ?>">
                <img src="../images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
            </a>
        </div>
        <br>

        <!--name-->
        <div class="product-name">
            <a href="product.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
        </div>
        <br>

        <!--description-->
        <div class="product-des">
            <a href="product.php?id=<?php echo $row['id']; ?>"><?php echo $row['des']; ?></a>
        </div>
        <!--size-->
        <div class="product-size">
            <a href="product.php?id=<?php echo $row['id']; ?>"><i><?php echo $row['size']; ?></i></a>
        </div>

        <!--price-->
        <div class="product-price">
            <a href="product.php?id=<?php echo $row['id']; ?>"><i><?php echo $row['price']; ?></i></a>
        </div>

        <!-- submit start -->
        <div class='submit'>
            <form action="insert.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="des" value="<?php echo $row['des']; ?>">
                <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                <input type="hidden" name="size" value="<?php echo $row['size']; ?>">

            </form>
        </div>
        <!-- submit End -->
        <div class="product-rating">
        <div class="stars" data-product-id="<?php echo $row['id']; ?>">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
        </div>
        <div id="rating-message-<?php echo $row['id']; ?>" class="rating-message"></div>
    </div>
    </div>

    <?php
    }
    ?>
</main>

<!------------------------main End---------------------------------->
<?php
include('../home/footer.php');
?>

