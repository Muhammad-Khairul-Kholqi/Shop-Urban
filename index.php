<?php
session_start();
if(isset($_SESSION['type'])) {
    header("location: signin-user.php");
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
    <link rel="stylesheet" href="css/toindex.css">
</head>
<body>
    <div class="bagian-atas">
        <div class="all-bagian-atas">
            <div class="all-right">
                <img src="img/logoshop.png">
                <p><span class="title-logo1" style="color: #0E2954;">SHOP</span><br><span class="title-logo2" style="color: #1B6B93;">URBAN OUTFITTERS</span></p>
            </div>
            <div class="all-left">
                <a href="signin-user.php"><button class="signin">Sign In</button></a>
                <a href="signup-user.php"><button class="signup">Sign Up</button></a>
            </div>
        </div>
    </div>

    <div class="slides">
        <div class="slide">
            <img src="img/toin1.png">
        </div>
        <div class="slide">
            <img src="img/toin2.png">
        </div>
        <div class="slide">
            <img src="img/toin3.png">
        </div>
        <div class="slide">
            <img src="img/toin4.png">
        </div>
        <div class="slide">
            <img src="img/toin5.png">
        </div>
        <center>
        <div class="dots-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
        </center>
    </div>

    <div class="all-halaman-bawah">
      <div class="halaman-bawah">
        <div class="paling-kiri">
          <img src="img/logoshop-text.png" >
        </div>
        <div class="tengah-kiri">
          <p>
            <span>About Shop<br>Urban Outfitters</span><br>About Us
            <br>intellectual property rights<br>Privacy Police<br>Blog
          </p>
        </div>
        <div class="tengah-kanan">
          <p>
            <span>Customer Services</span><br>Help Center<br>Contact Us
          </p>
          <div class="sosmed">
            <p><span>Follow Us</span></p>
            <img src="img/twitter.png">
            <img src="img/instagram2.png">
            <img src="img/facebook.png">
          </div>
        </div>
        <div class="paling-kanan">
            <p>Delivery</p>
            <div class="logo-delivery1">
              <img src="img/jne.png">
              <img src="img/jnt.png">
            </div>
            <div class="logo-delivery2">
              <img src="img/scpt.png">
              <img src="img/nnj.png">
            </div>
          </div>
      </div>
    </div>

    <div class="copyright">
      <center><p>© 2023 - Shop Urban Outfitters</p></center>
    </div>

<script src="js/script1.js"></script>
</body>
</html>