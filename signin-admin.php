
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Urban Outfitters</title>
    <link rel="website icon" href="img/logoshop.png" type="png">
    <link rel="stylesheet" href="css/signin-admin.css">
</head>
<body>
    <div class="all-login-page">
        <div class="login-page">
            <div class="page-kiri">
                <img src="img/logoshop-text.png">
            </div>
            <div class="page-kanan">
                <form action="" method="post">
                    <div class="title-login">
                        <p>Login Admin!</p>
                    </div>
                    <center><input name="name" class="input-text" type="text" placeholder="Name" autocomplete="off" required></center>
                        <br><br>
                    <center>
                        <div class="all-input-chk">
                            <input name="password" class="input-password" id="pwd" type="password" placeholder="Password" autocomplete="off" required>
                            <input class="input-chk" type="checkbox" id="chk">
                        </div>
                    </center>
                        <br>
                    <input class="input-remember" type="checkbox" name="remember" id="remember" class="checkbox">
                    <label for="remember">Remember me</label>
                        <br><br><br>
                    <center><button type="submit" name="login">Sign in</button></center>
                        <br><br>
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