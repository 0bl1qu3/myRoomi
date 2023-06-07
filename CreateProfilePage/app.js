document.addEventListener("DOMContentLoaded", function () {
    const slide = document.querySelector(".slide");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");
  
    // Calculate the width of a single section
    const sectionWidth = slide.offsetWidth / slide.children.length;
  
    let currentSection = 0;
  
    // Function to update the position of the slide
    function updatePosition() {
      slide.style.transform = `translateX(-${currentSection * sectionWidth}px)`;
    }
  
    // Event listener for the previous button
    prevBtn.addEventListener("click", function () {
      if (currentSection > 0) {
        currentSection--;
        updatePosition();
      }
    });
  
    // Event listener for the next button
    nextBtn.addEventListener("click", function () {
      if (currentSection < slide.children.length - 1) {
        currentSection++;
        updatePosition();
      }
    });
  });
  