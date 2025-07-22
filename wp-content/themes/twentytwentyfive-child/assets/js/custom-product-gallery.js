class CustomProductGallery extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const thumbEl = this.querySelector('.thumb-swiper');
    const mainEl = this.querySelector('.main-swiper');

    if (!thumbEl || !mainEl) return;

    const thumbSwiper = new Swiper(thumbEl, {
        direction: 'horizontal',
        slidesPerView: 3,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.thumb-next',
            prevEl: '.thumb-prev',
        },
        breakpoints: {
            768: {
                direction: 'horizontal',
                slidesPerView: 'auto'
            },
        },
    });

    const mainSwiper = new Swiper(mainEl, {
        direction: 'horizontal',
        slidesPerView: 1,
        speed: 150,
        zoom: {
            maxRatio: 3,
            minRatio: 1,
        },
        thumbs: {
            swiper: thumbSwiper,
        },
        breakpoints: {
            768: {
                direction: 'horizontal'
            },
        },
    });

    this.thumbSwiper = thumbSwiper;
    this.mainSwiper = mainSwiper;

    this.mainSwiper.on('slideChange', () => {
      const activeIndex = this.mainSwiper.activeIndex;
      const paginationSwiper = this.thumbSwiper;
      const visibleSlides = paginationSwiper.params.slidesPerView;
      const currentStart = paginationSwiper.activeIndex;

      if (activeIndex <= currentStart + visibleSlides - 1) {
        paginationSwiper.slideTo(activeIndex);
      }
    });
  }
}

if (!customElements.get('custom-product-gallery')) {
  customElements.define('custom-product-gallery', CustomProductGallery);
}
