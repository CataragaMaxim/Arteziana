<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/service.css">
  <title>УСЛУГИ</title>
  <?php
    require_once "tpl/head.php";
  ?>
  <script>
    let pageId = 'service';
  </script>
  <style>
    #main-body {
      padding: 0px;
    }
  </style>
</head>
<body>
  <!-- HEADER START -->
  <?php
    require_once "tpl/header-ru.php";
  ?>
  <!-- HEADER END -->
  <div id="main-body">
    <div id="content">
      <!-- <div id="side-info"></div> -->
      <div id="main-part">
       <div id="service-list">
        <div class="service-item">
          <img src="img/bur.jpg" alt="Forarea fântâni">
          <h3>Бурение скважин</h3>
          <p> Вопрос цены скважины, целиком и полностью зависит от следующих факторов: <br>
                1 - Назначение (хозяйственные нужды, сельское хозяйство, производство) <br>
                2 - Количество добываемой воды в сутки (1-24 тонн, 25-75 тонн, 76-150 тонн,  и от 160 тонн)<br>
                3 - Местоположение (геолокация или кадастровый номер)<br>
                4 - Конструкция скважины (на известняк, на песок, с фильтром или открытым стволом)<br>
                5 - Качество материалов<br>
                6 - Наличный или безналичный расчёт.<br>
              <br>
              Ответьте на эти вопросы и мы дадим вам лучшее предложение!
          </p>
          <h3 class="price">10000 лей</h3>
        </div>
        <div class="line"></div>
        <div class="service-item">
          <img src="img/obu.jpg" alt="Amenajarea fântâni">
          <h3>Обустройство скважин</h3>
          <p>Обустройство скважины  подразумевает установку насоса
             и блока автоматики, подключение дома к источнику воды.</p>
          <h3 class="price">10000 лей</h3>
        </div>
        <div class="line"></div>
        <div class="service-item">
          <img src="img/proe.jpg" alt="Proiectarea fântâni">
          <h3>Проектирование скважин</h3>
          <p>Проект на скважину – это техническая документация,
             которая содержит в себе комплекс работ, требующих
             строго исполнения при бурении скважины и любое отступление от
             проекта, должно согласовываться с проектным отделом или проектной
             организацией.</p>
          <h3 class="price">10000 лей</h3>
        </div>
        <div class="line"></div>
        <div class="service-item">
          <img src="img/remo.jpg" alt="Reparatie fântâni">
          <h3>Ремонт скважин</h3>
          <p>Ремонт скважин это комплекс работ, направленных на восстановление
             работоспособности скважинного и устьевого оборудования, и работ
             по изменению режима эксплуатации скважины, а также по очистке
             подъемной колонны и забоя от парафиносмолистых отложений, солей и
             песчаных пробок.</p>
          <h3 class="price">10000 лей</h3>
        </div>
        <div class="line"></div>
        <div class="service-item">
          <img src="img/zam.jpg" alt="Înlocuirea și instalarea echipamentelor de pompare">
          <h3>Замена и монтаж насосного оборудования</h3>
          <p></p>
          <h3 class="price">10000 лей</h3>
        </div>
       </div>
      </div>
    </div>
    <!-- <div id="partners"></div> -->
  </div>
  <?php
    require_once "tpl/footer-ru.php";
  ?>
</body>
</html>