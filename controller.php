<?php 
$server = mysqli_connect("localhost", "root", "", "db_onlineshop");

function query($query)
{
    global $server;
    $result = mysqli_query($server, $query);
    $all_data = [];

    while ($data = mysqli_fetch_assoc($result)) {
        $all_data[] = $data;
    }
    return $all_data;
}
if($server){
    echo "";
}else{
    echo "TIDAK BERHASIL".'<br>';
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($server, "SELECT * FROM tbl_login_user WHERE 
                                    username = '$username' AND password = '$password'");

    if (mysqli_num_rows($query) > 0) {
        $fetch = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $fetch['id'];
        $_SESSION['username'] = $fetch['username'];
        $_SESSION['password'] = $fetch['password'];

        // Redirect to index.php
        header('location: create-akun-user.php');
        exit();
    } else {
        // Set an error message
        $error = "Incorrect username or password. Please try again.";
    }
}

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

session_start();

if (!isset($_SESSION['username'])) {
    header("location: index.php");
}
?>

