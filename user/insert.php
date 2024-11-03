<?php
session_start();
include('../conn.php');

if (isset($_POST['id']) && isset($_POST['image']) && isset($_POST['name']) && isset($_POST['des'])
        && isset($_POST['price']) && isset($_POST['size'])) {
    $id = $_POST['id'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $des = $_POST['des'];
    $price = $_POST['price'];
    $size = $_POST['size'];


    $insert = "INSERT INTO cart (image, name, des, price, size) VALUES ('$image', '$name', '$des', '$price', '$size')";
    if (mysqli_query($conn, $insert)) {

        if (!isset($_SESSION['cart_count'])) {
            $_SESSION['cart_count'] = 0;
        }
        $_SESSION['cart_count'] += 1;

        header("Location: product.php?id=$id");
        exit();
    } else {
        echo "An error occurred while adding the product: " . mysqli_error($conn);
    }
}
?>

