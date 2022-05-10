<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Mandalore -
    <?php
    include "./util.php";
    echo format_title(__FILE__);
    ?>
  </title>
  <link rel="stylesheet" href="../../css/style.css" type="text/css">
  <link rel="stylesheet" href="../../css/fonts.css" type="text/css">
</head>

<body>
  <?php
  include "../templates/navbar.php"
  ?>
  <div class="container container-flex">
    <h1 class="error-heading">* 404</h1>
    <h3>Ooops, you've hyperjumped too far into the unknown regions.</h3>
    <h4>We recommend taking a hyperspace route back to Mandalore.</h4>
    <h4>May the force be with you!</h4>
    <a href="/">Jump to Mandalore</a>
  </div>
</body>

</html>