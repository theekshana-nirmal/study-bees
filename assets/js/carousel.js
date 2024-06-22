document.addEventListener('DOMContentLoaded', function() {
    const cardsContainer = document.querySelector('.cards');
    const prevButton = document.querySelector('.btn-navigation a img[alt="Previous Button"]');
    const nextButton = document.querySelector('.btn-navigation a img[alt="Next Button"]');
    let currentIndex = 0;
  
    function updateCarousel() {
      const cardWidth = document.querySelector('.card').clientWidth;
      const gap = 20; // Assuming a 10px margin on each side of a card
      const offset = currentIndex * (cardWidth + gap) * -1;
      cardsContainer.style.transform = `translateX(${offset}px)`;
    }
  
    prevButton.addEventListener('click', function() {
      if (currentIndex > 0) {
        currentIndex -= 3; // Move back 3 cards
        updateCarousel();
      }
    });
  
    nextButton.addEventListener('click', function() {
      if (currentIndex < 6) { // 9 cards total, but start count from 0 and stop 2 steps early
        currentIndex += 3; // Move forward 3 cards
        updateCarousel();
      }
    });
  
    updateCarousel(); // Initial update to set the carousel position
  });