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
  echo generate_og_tags($title, "Kontakt");
  ?>
</head>

<body>
  <?php
  include "./php/templates/navbar.php";
  echo gen_navbar(__FILE__);
  ?>
  <main class="container container-flex contact-container">
    <h1>Kontakt-formular</h1>
    <form class="contact-formular" action="/php/kontakt.php">
      <div>
        <label for="name">
          <h3>
            Name:
          </h3>
        </label>
        <input type="text" placeholder="Name" required id="name" name="name">
      </div>
      <div>
        <label for="email">
          <h3>Email:</h3>
        </label>
        <input type="email" placeholder="example@email.com" required id="email" name="email">
      </div>
      <div>
        <label for="box"><a href="/php/datenschutz.php">Datenschutzerklärung</a> akzeptiert:</label>
        <input type="checkbox" required id="box" name="privacy">
      </div>
      <input type="submit">
    </form>
  </main>
  <?php
  include "./php/templates/footer.php";
  ?>
</body>

</html>