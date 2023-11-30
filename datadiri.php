<?php
    session_start();
    include("controller.php");
    
    if(isset($_SESSION['type'])) {
        header("location: create-akun-user.php");
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Urban Outfitters</title>
    <link rel="website icon" href="img/logoshop.png" type="png">
    <link rel="stylesheet" href="datadiri.css">

</head>
<body>
    <div class="all-inputan">
        <div class="container-inputan">

            <div class="title-inputan">
                <p>Fill in your<br>data!</p>
            </div>

            <div class="inputan-datadiri">
                <form method="post" action="akun.php">
                    <div class="name-alamat">
                        <input type="text" name="nama" placeholder="Name" autocomplete="off">
                        <br><br>
                        <input type="text" name="alamat" placeholder="Address" autocomplete="off">
                    </div>
                    <br>
                    <input type="text" name="umur" placeholder="Age" autocomplete="off" >
                    <select name="jeniskelamin">
                        <option value="man" name="man">Man</option>
                        <option value="woman" name="woman">Woman</option>
                    </select>
                    <br><br>

                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>