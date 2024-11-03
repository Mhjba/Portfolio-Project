<?php
session_start();
include('../conn.php');
?>

<?php
echo $id =$_GET['id'];
mysqli_query($conn, "DELETE FROM admin WHERE id=$id");
header('location: admin-product.php')
?>
