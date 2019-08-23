$(document).ready(function() {
  // Бургер меню
  $('.menu__btn').on('click', function(e){
    e.preventDefault();
    $(this).toggleClass('menu__btn_active');
    $('.menu-burger').toggleClass('menu-burger_active');
  });
  // слайдер
  $('.slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navContainer: '.announcement__nav',
    navText: [
      '<span class="announcement__btn announcement__left">Предыдущее</span><span class="announcement__line"></span>',
      '<span class="announcement__btn announcement__right"> Следующее </span>'
    ],
    navElement: 'span',
    navContainerClass: '.announcement__nav',
    responsive: {
      1200: {
        items: 1
      },
      768: {
        items: 1
      },
      0: {
        items: 1
      }
    }
  })
});