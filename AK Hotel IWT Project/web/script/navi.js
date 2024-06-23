window.addEventListener('DOMContentLoaded', function () {
    var slides = document.querySelectorAll('.slide');
    var currentSlide = 0;
    var totalSlides = slides.length;
    var slideInterval = setInterval(nextSlide,5000);
  
    function nextSlide() {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % totalSlides;
      slides[currentSlide].classList.add('active');
    }
  });





  function search_roomType() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('l1');
      
    selectElement = document.querySelector('#city');
    output = selectElement.options[selectElement.selectedIndex].value;

    for (i = 0; i < x.length; i++) {

        if (!x[i].innerHTML.toLowerCase().includes(input) || !x[i].innerHTML.toLowerCase().includes(output)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="initial";                 
        }

    }
}