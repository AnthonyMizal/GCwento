function reveal() {
    var reveals = document.querySelectorAll(".about_img");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("rubberBand");
      } else {
        reveals[i].classList.remove("rubberBand");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);