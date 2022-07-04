<!DOCTYPE html>
<html lang="de">

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
  <div class="container container-flex">
    <h1>History</h1>
  </div>
  <div class="container">
    <h3>Ancient Mandalore</h3>
    <h3>Mandalorian Civil War</h3>
    <h3>Independence</h3>
    <h3>Deathwatch</h3>
  </div>
</body>

</html>