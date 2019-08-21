$(document).ready(function() {
  // Бургер меню
  $('.menu__btn').on('click', function(e){
    e.preventDefault();
    $(this).toggleClass('menu__btn_active');
    $('.menu-burger').toggleClass('menu-burger_active');
  });
});