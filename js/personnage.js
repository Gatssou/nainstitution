let alpatofIndex = 0;
putinSlides();
function boutonAvant() {
    alpatofIndex++;
    putinSlides();
}
function boutonApres() {
    alpatofIndex--;
    putinSlides();
}
function bierreSlide(n) {
    alpatofIndex = n - 1;
    putinSlides();
}
function putinSlides() {
  let slides = document.querySelectorAll(".suivant");
  if (alpatofIndex > slides.length - 1) alpatofIndex = 0;
  if (alpatofIndex < 0) alpatofIndex = slides.length - 1;
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  slides[alpatofIndex].style.display = "block";
}