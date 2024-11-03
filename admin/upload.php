<?php
session_start();
include('../conn.php');

if(isset($_POST['upload'])) {
    @$NAME = $_POST['name'];
    @$DES = $_POST['des'];
    @$PRICE = $_POST['price'];
    @$SIZE = $_POST['size'];
    @$SECTION = $_POST['section'];
    @$image_location = $_FILES['image']['tmp_name'];
    @$image_name = $_FILES['image']['name'];
    @$image_up = "../images/" . $image_name;

    $query = "INSERT INTO admin (image, name, des, price, size, section) 
               VALUES ('$image_up', '$NAME', '$DES', '$PRICE', '$SIZE', '$SECTION')";

    if (mysqli_query($conn, $query)) {
        if (move_uploaded_file($image_location, $image_up))
         {
            echo "<script>alert('Product Uploaded');</script>";
        }
    }
    header("Location: upload.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/up.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>

</head>
<body>
    <!----main upload start-------->
    <center>
        <div class="main">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <h2>Add Products</h2>
                <input type="file" id="file" name="image">
                <br>
                <input type="text" name="name"  placeholder="Enter Name">
                <br>
                <input type="text" name="des" id="des" placeholder="Enter Description">
                <br>
                <input type="text" name="price" placeholder="Enter Price" >
                <br>
                <input type="text" name="size" id="size" placeholder="Enter Size" >
                <br>
                <!-------sections start------>
                <select name="section" id="form_control">
                    <option value="" disabled selected hidden>Select Section</option>
                    <option value="Computers">Computers</option>
                    <option value="Phones">Phones</option>
                    <option value="fashion">Televisions</option>
                    <option value="Cameras">Cameras</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Other Devices">Other Devices</option>
                </select>
                <!------sections end----------->
                <button name="upload">upload</button>
                <button type="submit" formaction="admin-product.php">Products</button>
            </form>
        </div>
    </center>
    <!----main upload End-------->
</body>
</html>

