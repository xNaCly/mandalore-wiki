<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Mandalore -
      <?php
      include "./php/util/util.php";
      echo format_title(__FILE__);
      ?>
    </title>
    <?php
      include "./php/templates/header.php"
    ?>
  </head>

  <body>
    <?php
      include "./php/templates/navbar.php";
      echo gen_navbar(__FILE__);
    ?>
    <div class="container container-flex homepage-container">
      <div class="homepage-main-image-container">
        <img class="box homepage-main-image" alt="the mandalorian fighting stormtroopers" src="./assets/images/din-fighting.webp">
        <span class="homepage-main-image-text ft-bold">Mandalore Wiki</span>
      </div>
    </div>
  </body>
</html>
