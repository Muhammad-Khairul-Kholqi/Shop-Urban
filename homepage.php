<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Urban Outfitters</title>
    <link rel="website icon" href="img/logoshop.png" type="png">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="paling-atas">
        <p class="no-cs">Call us free - (+62) 8872 2247 784</p>
        <div class="img-sosmed">
            <p class="title-sosmed">Follow Us</p>
            <img class="twitter" src="img/twitter.png">
            <img class="instagram" src="img/instagram2.png">
            <img class="fb" src="img/facebook.png">
        </div>
    </div>

    <div class="notifikasi-help-troli">
      <div class="notifikasi">
        <p><a href="">Notifications</a></p>
        <a href=""><img class="lonceng" src="img/bell.png" alt=""></a>
      </div>
      <div class="help">
        <p><a href="">Help</a></p>
        <a href=""><img class="question" src="img/question.png" alt=""></a>
      </div>
      <div class="troli">
        <p class="title-troli"><a href="">My Trolley</a></p>
        <a href=""><img class="troli-saya" src="img/shopping-cart.png" alt=""></a>
      </div>
    </div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const noCsElement = document.querySelector(".no-cs");

  function updateText() {
    const windowWidth = window.innerWidth;
    if (windowWidth <= 600) {
      noCsElement.textContent = "Call us - (+62) 8872 2247 784";
    } else {
      noCsElement.textContent = "Call us free - (+62) 8872 2247 784";
    }
  }

  // Panggil fungsi saat halaman dimuat dan saat ukuran jendela berubah
  updateText();
  window.addEventListener("resize", updateText);
}); 

document.addEventListener("DOMContentLoaded", function() {
  const noCsElement = document.querySelector(".no-cs");

  function updateText() {
    const windowWidth = window.innerWidth;
    if (windowWidth <= 545) {
      noCsElement.textContent = "(+62) 8872 2247 784";
    } else {
      noCsElement.textContent = "Call us - (+62) 8872 2247 784";
    }
  }

  // Panggil fungsi saat halaman dimuat dan saat ukuran jendela berubah
  updateText();
  window.addEventListener("resize", updateText);
}); 
</script>
</body>
</html>