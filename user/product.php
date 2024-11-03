<?php
include('../home/header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $id");

    if ($row = mysqli_fetch_array($result)) {
?>
    <!---------product start--------->
    <div class="product-det">
        <div class="product-img">
            <img src="../images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
        </div>
        <center>
            <div class="product-info">
                <h1><?php echo $row['name']; ?></h1>
                <p><?php echo $row['des']; ?></p>
                <p><?php echo $row['size']; ?></p>
                <p><?php echo $row['price']; ?></p>
                <!--cart forn-->
                <form id="add-to-cart-form">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                    <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="des" value="<?php echo $row['des']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="size" value="<?php echo $row['size']; ?>">
                    <button type="submit" class="add-cart-btn">
                        <i class='fa-solid fa-cart-plus'></i>Add to cart
                    </button>
                </form>
            </div>
        </center>
    </div>
    <!---------product End--------->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#add-to-cart-form").submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: $(this).serialize(),
                success: function(response) {
                    alert("Product added to cart!");
                },
                error: function() {
                    alert("Error adding product to cart.");
                }
            });
        });
    });
    </script>
<?php
    }
}
?>

