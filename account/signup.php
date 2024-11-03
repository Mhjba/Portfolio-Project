<?php
include('../conn.php');

if (isset($_POST['submit'])) {
    @$username = $_POST['Name'];
    @$email = $_POST['email'];
    @$password = $_POST['password'];
    @$copassword = $_POST['cpassword'];
    @$query = mysqli_query($conn, "SELECT * FROM `account` WHERE email = '$email'");

    if (mysqli_num_rows($query) > 0) {
        echo '<script>alert("User already exists!");</script>';
    } else {
        mysqli_query($conn, "INSERT INTO `account`(username, email, password) VALUES('$username', '$email', '$password')");
        echo '<script>alert("Registered successfully!");</script>';
        header('location:login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/account.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Signup</title>
</head>
<body>
    <!--- sinup container start ----->
        <div class="form-container">
            <form action="" method="post">
                <h3>Sign Up</h3>
                <!---Username---->
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="Name" required placeholder="Enter Username" class="box">
                </div>
                <!---email ---->
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" required placeholder="Enter Email" class="box">
                </div>
                <!---Password ---->
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" required placeholder="Enter Password" class="box">
                </div>
                <!---Confirm Password ---->
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="cpassword" required placeholder="Confirm Password" class="box">
                </div>
                <input type="submit" name="submit" class="btn" value="Sign up">
                <!---social start ---->
                    <div class="social-login">
                            <p>Or sign up with:</p>
                            <a href="https://www.facebook.com/" class="social-btn">
                            <img src="../user/image/facebook.png"><h1></h1>
                            </a>
                            <a href="https://accounts.google.com/" class="social-btn">
                            <img src="../user/image/google.png"><h1></h1>
                            </a>
                    </div>
                <!---social start ---->
                <p>Already have an account? <a href="login.php">Log in</a></p>
            </form>
        </div>
    <!---sinup container End ----->
</body>
</html>
