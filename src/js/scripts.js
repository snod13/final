$(document).ready(function() {
  // Бургер меню
  $('.menu__btn').on('click', function(e){
    e.preventDefault();
    $(this).toggleClass('menu__btn_active');
    $('.menu-burger').toggleClass('menu-burger_active');
  });

  // Cлайдер
  $('.slider').owlCarousel({
    loop: true,
    dots: false,
    margin: 0,
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
  });

  // Управление модальным окном
  var button = $('.modal-activate');
  var modal = $('.modal');
  var closeForm = $('#close');
  button.on('click', function (e) {
    e.preventDefault();
    modal.addClass('modal_active');
    $('.modal-message').hide();
  });
  closeForm.on('click', function(){
    modal.removeClass('modal_active');
  });

  // Валидация формы
  $('#modal-form').validate({
    errorClass: "invalid",
    errorElement: "div",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      userphone: "required",
      useremail: {
        required: true,
        email: true
      }
    },
    messages: {
      username: {
        required: "Введите имя",
        minlength: jQuery.validator.format("Требуется не менее {0} символов")
      },
      userphone: "Введите телефон",
      useremail: {
        required: "Заполните поле",
        email: "Введите корректный email"
      }
    },
    submitHandler: function (form) {
      $.ajax({
        url: 'mail.php',
        type: 'POST',
        data: $(form).serialize(),
        success: function (data) {
          modal.addClass('modal_active');
          $('.modal-dialog').hide();
          $('.modal-message').show();
          $('.modal-message__text').text('Спасибо за обращение, ' + data + ', скоро мы вам перезвоним.');
          $('input').each(function () {
            $('input').val('');
          });
        }
      });
    }
  });

  // Маска для телефона
  $('.phone').mask('+7 (999) 999-99-99');
});