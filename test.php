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