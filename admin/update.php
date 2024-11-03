<?php
session_start();
include('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/up.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

<?php
@$product_id = $_GET['id'];
@$up = mysqli_query($conn, "SELECT * FROM admin WHERE id = $product_id");
@$data = mysqli_fetch_assoc($up);
?>

    <!--------update start------------------->
        <center>
            <div class="update">
            <form action="update.php?id=<?php echo $product_id; ?>" method="POST" enctype="multipart/form-data">
                    <h2>Update Products</h2>
                    <input type="file" id="file" name="image">
                    <br>
                    <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>">
                    <br>
                    <input type="text" name="des" id="des" value="<?php echo $data['des']; ?>">
                    <br>
                    <input type="text" name="price" id="price" value="<?php echo $data['price']; ?>">
                    <br>
                    <input type="text" name="size" id="size" value="<?php echo $data['size']; ?>">
                    <br>
                    <!-----sections start------>
                    <select name="section" id="form_control">
                        <option value="" disabled hidden>Select Section</option>
                        <option value="Computers" <?php if ($data['section'] == 'Computers') echo 'selected'; ?>>Computers</option>
                        <option value="Phones" <?php if ($data['section'] == 'Phones') echo 'selected'; ?>>Phones</option>
                        <option value="Televisions" <?php if ($data['section'] == 'Televisions') echo 'selected'; ?>>Televisions</option>
                        <option value="Cameras" <?php if ($data['section'] == 'Cameras') echo 'selected'; ?>>Cameras</option>
                        <option value="Accessories" <?php if ($data['section'] == 'Accessories') echo 'selected'; ?>>Accessories</option>
                        <option value="Other Devices" <?php if ($data['section'] == 'Other Devices') echo 'selected'; ?>>Other Devices</option>
                    </select>
                    <!-------sections end-------->
                    <button name="update" type="submit">Update</button>
            </form>
            </div>
        </center>
    <!--------update End------------------->

<?php
if (isset($_POST['update'])) {
    @$product_id = $_GET['id'];
    @$IMAGE = $_FILES['image'];
    @$NAME = $_POST['name'];
    @$DES = $_POST['des'];
    @$PRICE = $_POST['price'];
    @$SIZE = $_POST['size'];
    @$SECTION = $_POST['section'];
    @$old_image = $data['image'];
    @$image_location = $_FILES['image']['tmp_name'];
    @$image_name = $_FILES['image']['name'];
    @$image_up = "../images/" . $image_name;

    if (!empty($IMAGE['name'])) {
        if (move_uploaded_file($image_location, $image_up)) {
            $query = "UPDATE admin SET image='$image_up', name='$NAME', des='$DES', price='$PRICE', size='$SIZE', section='$SECTION' WHERE id=$product_id";
        } else {
            echo "<script>alert('Product image not uploaded');</script>";
            exit();
        }
    } else {
        $query = "UPDATE admin SET image='$old_image', name='$NAME', des='$DES', price='$PRICE', size='$SIZE', section='$SECTION' WHERE id=$product_id";
    }
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('The product has been updated.');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    header("Location: admin-product.php");
    exit();
}
?>
</body>
</html>

