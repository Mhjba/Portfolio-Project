<?php
include('../conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <?php
        @$email = $_POST['email'];
        @$password = $_POST['password'];
        @$add = $_POST['add'];
        if (isset($add)) {
            if (empty($email) || empty($password)) {
                echo '<script>alert("Please enter your Email and Password");</script>';
            } else {
                $query = "SELECT * FROM account WHERE EMAIL='$email' AND password='$password'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) == 1) {
                    $_SESSION['EMAIL'] = $email;
                    echo '<script>alert("WELCOME TO THE SHOPPING STORE.");</script>';
                    header("REFRESH:2; URL=../user/index.php");
                } else {
                    echo '<script>alert("INCORRECT EMAIL OR PASSWORD.");</script>';
                    header("REFRESH:2; URL=login.php");
                }
            }
        }
        ?>
        <!----login container start --->
            <div class="form-container">
                <form action="" method="post">
                    <h3>Log in</h3>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" required placeholder="Enter Email" class="box">
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" required placeholder="Enter Password" class="box">
                    </div>
                    <input type="submit" name="add" class="btn" value="Login">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        <!----login container End --->
    </main>
</body>
</html>

