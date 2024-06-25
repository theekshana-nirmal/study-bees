document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const cards = Array.from(track.children);
    const nextButton = document.querySelector('.next');
    const prevButton = document.querySelector('.prev');

    let currentIndex = 0;

    // Function to get the width of a single card
    const getCardWidth = () => cards[0].getBoundingClientRect().width;

    // Function to calculate the number of visible cards based on screen size
    const getVisibleCardsCount = () => {
        const width = window.innerWidth;
        if (width <= 768) return 1; // small screen
        if (width <= 1024) return 2; // medium screen
        return 3; // large screen
    };

    const moveToCard = (index) => {
        const cardWidth = getCardWidth();
        const amountToMove = cardWidth * index;
        track.style.transform = `translateX(-${amountToMove}px)`;
    };

    // Update carousel on button click
    nextButton.addEventListener('click', () => {
        const visibleCardsCount = getVisibleCardsCount();
        if (currentIndex < cards.length - visibleCardsCount) {
            currentIndex++;
            moveToCard(currentIndex);
        }
    });

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            moveToCard(currentIndex);
        }
    });

    // Reset carousel position on window resize
    window.addEventListener('resize', () => {
        const visibleCardsCount = getVisibleCardsCount();
        if (currentIndex > cards.length - visibleCardsCount) {
            currentIndex = cards.length - visibleCardsCount;
        }
        moveToCard(currentIndex);
    });
});
