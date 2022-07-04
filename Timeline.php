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
  <div class="container container-flex">
    <h1>Timeline of Mandalorian Content</h1>
  </div>
</body>