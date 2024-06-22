<style>
    *,
::before,
::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background: #222;
}

#cCarousel {
  position: relative;
  max-width: 900px;
  margin: auto;
}

#cCarousel .arrow {
  position: absolute;
  top: 50%;
  display: flex;
  width: 45px;
  height: 45px;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  z-index: 1;
  font-size: 26px;
  color: white;
  background: #00000072;
  cursor: pointer;
}

#cCarousel #prev {
  left: 0px;
}

#cCarousel #next {
  right: 0px;
}

#carousel-vp {
  width: 770px;
  height: 400px;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
  margin: auto;
}

@media (max-width: 770px) {
  #carousel-vp {
    width: 510px;
  }
}

@media (max-width: 510px) {
  #carousel-vp {
    width: 250px;
  }
}

#cCarousel #cCarousel-inner {
  display: flex;
  position: absolute;
  transition: 0.3s ease-in-out;
  gap: 10px;
  left: 0px;
}

.cCarousel-item {
  width: 250px;
  height: 365px;
  border: 2px solid white;
  border-radius: 15px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.cCarousel-item img {
  width: 100%;
  object-fit: cover;
  min-height: 246px;
  color: white;
}

.cCarousel-item .infos {
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  background: white;
  color: black;
}

.cCarousel-item .infos button {
  background: #222;
  padding: 10px 30px;
  border-radius: 15px;
  color: white;
  font-size: 1rem;
  font-weight: bold;
  cursor: pointer;
}
</style>

<section>
  <div id="cCarousel">
    <div class="arrow" id="prev"><i class="fa-solid fa-chevron-left"></i></div>
    <div class="arrow" id="next"><i class="fa-solid fa-chevron-right"></i></div>

    <div id="carousel-vp">
      <div id="cCarousel-inner">

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 1 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 2 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 3 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 4 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 5 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 6 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<script>
    const prev = document.querySelector("#prev");
const next = document.querySelector("#next");

let carouselVp = document.querySelector("#carousel-vp");

let cCarouselInner = document.querySelector("#cCarousel-inner");
let carouselInnerWidth = cCarouselInner.getBoundingClientRect().width;

let leftValue = 0;

// Variable used to set the carousel movement value (card's width + gap)
const totalMovementSize =
  parseFloat(
    document.querySelector(".cCarousel-item").getBoundingClientRect().width,
    10
  ) +
  parseFloat(
    window.getComputedStyle(cCarouselInner).getPropertyValue("gap"),
    10
  );

prev.addEventListener("click", () => {
  if (!leftValue == 0) {
    leftValue -= -totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
  }
});

next.addEventListener("click", () => {
  const carouselVpWidth = carouselVp.getBoundingClientRect().width;
  if (carouselInnerWidth - Math.abs(leftValue) > carouselVpWidth) {
    leftValue -= totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
  }
});

const mediaQuery510 = window.matchMedia("(max-width: 510px)");
const mediaQuery770 = window.matchMedia("(max-width: 770px)");

mediaQuery510.addEventListener("change", mediaManagement);
mediaQuery770.addEventListener("change", mediaManagement);

let oldViewportWidth = window.innerWidth;

function mediaManagement() {
  const newViewportWidth = window.innerWidth;

  if (leftValue <= -totalMovementSize && oldViewportWidth < newViewportWidth) {
    leftValue += totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
    oldViewportWidth = newViewportWidth;
  } else if (
    leftValue <= -totalMovementSize &&
    oldViewportWidth > newViewportWidth
  ) {
    leftValue -= totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
    oldViewportWidth = newViewportWidth;
  }
}

</script>
