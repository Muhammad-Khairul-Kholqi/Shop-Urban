<?php
include("controller.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM tbl_login_user WHERE username = '$username'";
    $result = mysqli_query($server, $sql);

    if (mysqli_num_rows($result) > 0) {
        $message = "<i style='color: red; font-style: italic;'>Username sudah terdaftar</i>";
    } else {
        $sql = "INSERT INTO tbl_login_user (username, password) VALUES ('$username', '$hashedPassword')";
        if (mysqli_query($server, $sql)) {
            echo "<script>
            alert('Pendaftaran Berhasil');
            document.location.href = 'index.php?page=index';
            </script>";
        } else {
            echo "Gagal";
        }
    }
}

if ($server) {
    echo "";
} else {
    echo "TIDAK BERHASIL" . '<br>';
}

if (isset($_SESSION['username'])) {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Urban Outfitters</title>
    <link rel="icon" href="img/logoshop.png" type="png">
    <link rel="stylesheet" href="css/signup-user.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <p>Regis Account!</p>
    </div>
    <?php if (isset($message)) : ?>
        <center>
            <p style="color: red; font-style: italic; font-size:20px"><?php echo $message; ?></p>
        </center>
    <?php endif; ?>
    <center><input class="input-text" type="text" name="username" id="username" placeholder="username" autocomplete="off" required></center>
    <br><br>
    <center>
        <div class="all-input-chk">
            <input class="input-password" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
            <input class="input-chk" type="checkbox" id="chk">
        </div>
    </center>
    <br><br>
    <center>
        <div class="cnf-input-chk">
            <input class="cnf-input-password" type="password" placeholder="Confirm password" autocomplete="off" required>
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
        const password = document.getElementById("password");
        const chk = document.getElementById("chk");

        chk.onchange = function(e) {
            password.type = chk.checked ? "text" : "password";
        };

        const confirmPassword = document.getElementById("pwd2");
        const chk2 = document.getElementById("chk2");

        chk2.onchange = function(e) {
            confirmPassword.type = chk2.checked ? "text" : "password";
        };

        const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: "success",
  title: "Signed in successfully"
});
    </script>

</body>

</html>
