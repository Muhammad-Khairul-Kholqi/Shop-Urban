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
