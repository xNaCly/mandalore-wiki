<!DOCTYPE html>
<html lang="de">

<head>
  <?php
  include "templates/header.php";
  include "util/util.php";
  include "util/opengraph.php";
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
  include "templates/navbar.php";
  echo gen_navbar(__FILE__);
  ?>
  <main class="container container-flex contact-container">
    <h1>Spiel-formular</h1>
    <form class="contact-formular" action="/php/namegen.php">
      <div>
        <label for="name">
          Name:
        </label>
        <input type="text" placeholder="Name" required id="name" name="name" />
      </div>
      <div>
        <label for="waffe">
          Lieblingswaffe:
        </label>
        <input type="text" placeholder="Blaster" required id="waffe" name="waffe" />
      </div>
      <div>
        <label for="tier">
          Lieblingstier:
        </label>
        <input type="text" placeholder="Grogu" required id="tier" name="tier" />
      </div>
      <button type="submit">Absenden</button>
    </form>
    <h2>Dein Mandalorianer Name:</h2>
    <?php
    $name = isset($_GET["name"]) ? $_GET["name"] : '';
    $waffe = isset($_GET["waffe"]) ? $_GET["waffe"] : '';
    $tier = isset($_GET["tier"]) ? $_GET["tier"] : '';

    $values = $name . $waffe . $tier;
    echo strcmp($values, "") == 0 ? 'Gib deine Daten ein um deinen Namen zu generieren' : substr(base64_encode($values), 0, 5);
    ?>
  </main>
  <?php
  include "templates/footer.php";
  ?>
</body>

</html>