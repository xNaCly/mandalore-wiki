<!DOCTYPE html>
<html lang="de">

<head>
  <?php
  include "./php/templates/header.php";
  include "./php/util/util.php";
  include "./php/util/opengraph.php";
  $title = format_title(__FILE__);
  echo "
  <title>
    $title
  </title>";
  echo generate_og_tags($title, "Die Geschichte Mandalores");
  ?>
</head>

<body>
  <?php
  include "./php/templates/navbar.php";
  echo gen_navbar(__FILE__);
  ?>
  <div class="container container-flex">
    <h1>Geschichte</h1>
  </div>

  <div class="container">
    <h3>Ancient Mandalore</h3>
    <h3>Mandalorian Civil War</h3>
    <h3>Independence</h3>
    <h3>Deathwatch</h3>
  </div>
  <?php
  include "./php/templates/footer.php";
  ?>
</body>

</html>