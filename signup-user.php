<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Urban Outfitters</title>
    <link rel="website icon" href="img/logoshop.png" type="png">
    <link rel="stylesheet" href="css/signup-user.css">
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
                        <p>Regis Account!</p>
                    </div>
                    <center><input class="input-text" type="text" placeholder="Name" autocomplete="off" required></center>
                        <br><br>
                    <center>
                        <div class="all-input-chk">
                            <input class="input-password" id="pwd" type="password" placeholder="Password" autocomplete="off" required>
                            <input class="input-chk" type="checkbox" id="chk">
                        </div>
                    </center>
                        <br><br>
                    <center>
                        <div class="cnf-input-chk">
                            <input class="cnf-input-password" id="pwd2" type="password" placeholder="Confirm password" autocomplete="off" required>
                            <input class="box-input-chk" type="checkbox" id="chk2">
                        </div>
                    </center>
                        <br><br>
                    <center><button type="submit" name="login">Sign up</button></center>
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

    const pwd2 = document.getElementById("pwd2");
    const chk2 = document.getElementById("chk2");

    chk2.onchange = function(e) {
        pwd2.type = chk2.checked ? "text" : "password";
    };
</script>

</body>
</html>