function addHoverBorder() {
    var input = document.querySelector('.input-border');
    input.classList.add('hover');
  }
  
  function removeHoverBorder() {
    var input = document.querySelector('.input-border');
    input.classList.remove('hover');
  }

  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(() => {
      showSlides(slideIndex += 1);
    }, 3000); // Set the delay in milliseconds (3 seconds in this case)
  }

  