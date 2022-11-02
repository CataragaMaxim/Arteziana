<!DOCTYPE html>
<html lang="md">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/service.css">
  <title>SERVICII</title>
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
    require_once "tpl/header.php";
  ?>
  <!-- HEADER END -->
  <div id="main-body">
    <div id="content">
      <!-- <div id="side-info"></div> -->
      <div id="main-part">
       <div id="service-list">
        <div class="service-item">
          <img src="img/bur.jpg" alt="Forarea fântâni">
          <h3>Forarea fântâni</h3>
          <p> Prețul fântânii depinde în întregime de următorii factori: <br>
                1 - Scop (nevoi economice, agricultură, producție) <br>
                2 - Cantitatea de apă extrasă pe zi (1-24 tone, 25-75 tone, 76-150 tone și de la 160 tone) <br>
                3 - Locație (geolocație sau număr cadastral) <br>
                4 - Construția fântânilor (pe calcar, pe nisip, cu un filtru sau un trunchi deschis) <br>
                5 - Calitatea materialelor <br>
                6 - Plata în cash sau cu card. <br>
              <br>
            Răspundeți la aceste întrebări și vă vom oferi cea mai bună ofertă!
          </p>
          <h3 class="price">10000 lei</h3>
        </div>
        <div class="line"></div>
        <div class="service-item">
          <img src="img/obu.jpg" alt="Amenajarea fântâni">
          <h3>Amenajarea fântâni</h3>
          <p>Aranjamentul fântânilor implică instalarea unei pompe și a unei
             unități de automatizare, care leagă Casa de o sursă de apă.</p>
          <h3 class="price">10000 lei</h3>
        </div>
        <div class="line"></div>
        <div class="service-item">
          <img src="img/proe.jpg" alt="Proiectarea fântâni">
          <h3>Proiectarea fântâni</h3>
          <p>Proiectarea fântânilor este o documentație tehnică care conține un set
             de lucrări care necesită o execuție strictă la forarea unei fântâni
              și orice abatere de la proiect trebuie să fie coordonată cu
               departamentul sau organizația proiectului.</p>
          <h3 class="price">10000 lei</h3>
        </div>
        <div class="line"></div>
        <div class="service-item">
          <img src="img/remo.jpg" alt="Reparatie fântâni">
          <h3>Reparatie fântâni</h3>
          <p>Repararea fântânilor este un complex de lucrări menite să
             restabilească operabilitatea echipamentului de foraj și a capului
             de fântână și să lucreze la schimbarea modului de funcționare a
             fântânii, precum și la curățarea coloanei de ridicare și a
             fundului din depozitele de parafină-gudron, săruri și blocaje
             de nisip.</p>
          <h3 class="price">10000 lei</h3>
        </div>
        <div class="line"></div>
        <div class="service-item">
          <img src="img/zam.jpg" alt="Înlocuirea și instalarea echipamentelor de pompare">
          <h3>Înlocuirea și instalarea echipamentelor de pompare</h3>
          <p></p>
          <h3 class="price">10000 lei</h3>
        </div>
       </div>
      </div>
    </div>
    <!-- <div id="partners"></div> -->
  </div>
  <?php
    require_once "tpl/footer.php";
  ?>
</body>
</html>