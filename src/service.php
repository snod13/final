<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css">
  <!-- Yandex.Metrika counter -->
  <script>(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym(55052935, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true });</script>
  <!-- /Yandex.Metrika counter -->
  <title>Услуги</title>
</head>
<body>
<?php
  include 'header.php';
?>
  <main>
  <?php
    include 'service_add.php';
  ?>
    <section class="section special">
      <div class="special__img">
        <img src="img/service/woman-nosmoking.png" alt="Девушка против сигарет">
      </div>
      <!-- /.special__img -->
      <div class="container">
        <div class="special-block">
          <div class="special__info">
            <span class="special__text">Специальное предложение</span>
            <h1 class="special__title">Не будь зависим</h1>
            <span class="special__subtitle">от сигарет</span>
            <button class="button hero__btn">Подробней</button>
          </div>
          <!-- /.special__info -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section special -->
<?php
    include 'footer.php';
?>