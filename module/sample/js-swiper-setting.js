const swiper = new Swiper(".swiper", {
  // pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // navigation
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  //loop
  loop: true,
  //speed
  speed: 500,
  //autoplay
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
});