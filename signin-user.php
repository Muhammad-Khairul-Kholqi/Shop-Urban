<?php
session_start();
require 'controller.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($server, "SELECT * FROM tbl_login_user WHERE 
                                    username = '$username' AND password = '$password'");

    if (mysqli_num_rows($query) > 0) {
        $fetch = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $fetch['id'];
        $_SESSION['username'] = $fetch['username'];
        $_SESSION['role'] = $fetch['role']; // Store the user role in the session

        if ($_SESSION['role'] == 'admin') {
            // Redirect admin to admin page
            header('location: admin-dashboard.php');
        } else {
            // Redirect regular user to user page
            header('location: create-akun-user.php');
        }
        exit();
    } else {
        // Set an error message
        $error = "Invalid username or password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Urban Outfitters</title>
    <link rel="website icon" href="img/logoshop.png" type="png">
    <link rel="stylesheet" href="css/signin-user.css">
</head>
<body>
    <div class="all-login-page">
        <div class="login-page">
            <div class="page-kiri">
                <img src="img/logoshop-text.png">
            </div>
            <div class="page-kanan">
                <form action="" method="POST">
                    <div class="title-login">
                        <p>Login Account!</p>
                    </div>
                    <?php
                        if (isset($error)) {
                            echo '<p style="color: red;text-align:center;">' . $error . '</p>';
                        }
                        ?>
                    <center><input class="input-text" type="text" name="username" id="username" placeholder="username" autocomplete="off" required></center>
                        <br><br>
                    <center>
                        <div class="all-input-chk">
                            <input class="input-password" id="pwd" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                            <input class="input-chk" type="checkbox" id="chk">
                        </div>
                    </center>
                        <br>
                    <input class="input-remember" type="checkbox" name="remember" id="remember" class="checkbox">
                    <label for="remember">Remember me</label>
                        <br><br>
                    <center><button type="submit" name="login">Sign in</button></center>
                    
                        <br>
                    <a class="link-to-admin" href="signin-admin.php"><p class="to-admin">Login as admin</p></a>
                   
                </form>
            </div>
        </div>
    </div>

<script>
    // untuk melihat password
    const pwd = document.getElementById("pwd");
    const chk = document.getElementById("chk");

    chk.onchange = function(e) {
        pwd.type = chk.checked ? "text" : "password";
    };
</script>

</body>
</html>
