<?php
session_start();
include("controller.php");

if(isset($_SESSION['type'])) {
    header("location: signin-user.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $alamat = $_POST["alamat"];
    $umur = $_POST["umur"];
    $gender = $_POST["gender"];
    
    // Check if a user with the same name and address already exists
    $sql = "SELECT * FROM tbl_data_diri WHERE name = '$name' AND alamat = '$alamat' AND umur = '$umur' AND gender = '$gender'";
    $result = mysqli_query($server, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $message = "<i style='color: red; font-style: italic;'>Data already exists</i>";
    } else {
        // Insert the new user data into the database
        $sql = "INSERT INTO tbl_data_diri (name, alamat, umur, gender) VALUES ('$name', '$alamat', '$umur', '$gender')";
        if (mysqli_query($server, $sql)) {
            echo "<script>
            alert('Registration Successful');
            document.location.href = 'datadiri.php?page=datadiri';
            </script>";
        } else {
            echo "Failed";
        }
    }
}

if($server) {
    echo "";
} else {
    echo "Connection failed" . '<br>';
}

if (isset($_SESSION['name'])) {
    header("location: datadiri.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Urban Outfitters</title>
    <link rel="icon" href="img/logoshop.png" type="png">
    <link rel="stylesheet" href="css/create-akun-user.css">
</head>

<body>
    <div class="form-toca">
        <center>
        <form action="" method="POST">
            <div class="title-akun">
                <p>Create Account!</p>
            </div>
            <input class="input-nama" type="text" name="name" placeholder="Name" autocomplete="off" required>
            <br><br>
            <input class="input-alamat" type="text" name="alamat" placeholder="Address" autocomplete="off" required>
            <br><br>
            <input class="input-umur" type="number" name="umur" placeholder="Age" autocomplete="off" inputmode="numeric" required>
            <select name="gender">
                <option value="lk">Man</option>
                <option value="pr">Woman</option>
            </select>
            <br><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        </center>
    </div>
</body>
</html>
