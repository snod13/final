    <section class="section consultation">
      <div class="container">
        <div class="consultation-block">
          <div class="consultation__text">
            <h2 class="section-title consultation__title">Получите бесплатную&nbsp;консультацию!</h2>
            <span class="section-subtitle consultation__subtitle">Отправте заявку и наши сотрудники свяжутся с&nbsp;Вами
              прямо сейчас</span>
          </div>
          <!-- /.section-text consultation__text -->
          <div class="consultation-buttons">
            <button class="button consultation__call modal-activate wow pulse" id="call"
              onclick="ym(55052935, 'reachGoal', 'call'); return true;">заказать звонок</button>
            <button class="button consultation__reception modal-activate">записаться на прием</button>
          </div>
          <!-- /.consultation-buttons -->
        </div>
        <!-- /.section-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section consultation -->
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer-block">
        <div class="footer-block__item">
          <div class="footer__logo">
            <img src="img/footer/logo.png" alt="Логотип">
          </div>
          <p class="footer__text">
            С другой стороны консультация с&nbsp;широким активом в значительной степени обуславливает создание
          </p>
          <div class="footer__social">
            <a href="#"><img src="img/footer/vk.png" alt="Вконтакте"></a>
            <a href="#"><img src="img/footer/facebook.png" alt="Фейсбук"></a>
            <a href="#"><img src="img/footer/instagram.png" alt="Инстаграм"></a>
          </div>
        </div>
        <!-- /.footer-block__item -->
        <div class="footer-block__item footer__menu">
          <h3 class="footer__title">О компании</h3>
          <ul class="footer-list">
            <li class="footer-list__item"><a href="#" class="footer-list__link">Новости</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Анонсы</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link modal-activate">Контакты</a></li>
          </ul>
        </div>
        <!-- /.footer-block__item -->
        <div class="footer-block__item footer__menu">
          <h3 class="footer__title">Наши услуги</h3>
          <ul class="footer-list">
            <li class="footer-list__item"><a href="#" class="footer-list__link">Психология</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Психоаналитика</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Услуги медиатора</a></li>
          </ul>
        </div>
        <!-- /.footer-block__item -->
        <div class="footer-block__item footer__menu">
          <span class="footer__title"><span class="footer__space"></span></span>
          <ul class="footer-list">
            <li class="footer-list__item"><a href="#" class="footer-list__link">Психология</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Психоаналитика</a></li>
            <li class="footer-list__item"><a href="#" class="footer-list__link">Услуги медиатора</a></li>
          </ul>
        </div>
        <!-- /.footer-block__item -->
      </div>
      <!-- /.footer-block -->
      <span class="footer__line"></span>
      <span class="footer__copyright">Создание и продвижение сайта: <a href="https://vk.com/glo_academy"
          class="footer__link">Glo&nbsp;Academy</a></span>
    </div>
    <!-- /.container -->
  </footer>
  <!-- /.footer -->
  <div class="modal" id="modal">
      <div class="modal-dialog">
        <button class="button modal-dialog__close" id="close">&times;</button>
        <div class="modal-form">
          <h3 class="form__title">Получите консультацию</h3>
          <span class="form__subtitle">Просто заполнив форму ниже</span>
          <form action="#" id="modal-form">
            <input type="text" name="username" class="form__input modal__input" placeholder="Ваше имя">
            <input type="tel" name="userphone" class="form__input modal__input phone" placeholder="Ваш телефон">
            <input type="email" name="useremail" class="form__input modal__input" placeholder="Ваш email">
            <button class="button modal__button">Заказать звонок</button>
          </form>
        </div>
      </div>
      <div class="modal-message">
        <button class="button modal-dialog__close" id="closer">&times;</button>
        <span class="modal-message__text"></span>
      </div>
  </div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    new WOW().init();
  </script>
</body>
</html>