<?php
session_start();
include('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/admin-product.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Products</title>
</head>
<body>
    <center>
        <h3>Products</h3>
        </center>

    <!-- Table Start -->
    <table class="product-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Size</th>
                <th>Section</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM admin");
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><img src="<?php echo $row['image']; ?>" class="table-img"></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['des']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['size']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Delete</a>
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!-- Table End -->
    <!-- home page and Products -->
    <div class="button-container">
        <a href='../user/index.php' class='home-link'>Home Page</a>
        <a href="upload.php" class="btn-up">Upload Product</a>
    </div>
</body>
</html>

