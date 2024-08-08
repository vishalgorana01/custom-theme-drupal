console.log('Hello, i am global javascript')

const hero_swiper = new Swiper('.hero_swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});


const latest_news_swiper = new Swiper('#latest_news_swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  slidesPerView: 3,
  // spaceBetween: 30,
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },


  // Navigation arrows
  navigation: {
    nextEl: '#latest_news_swiper_next',
    prevEl: '#latest_news_swiper_prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});