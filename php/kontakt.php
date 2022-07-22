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
    <h1>Kontakt-formular</h1>
    <hr>
    <form class="contact-formular" action="/php/kontakt-processor.php">
      <div>
        <label for="name">
          Name:
        </label>
        <input type="text" placeholder="Name" required id="name" name="name" />
      </div>
      <div>
        <label for="email">
          Email:
        </label>
        <input type="email" placeholder="example@email.com" required id="email" name="email" />
      </div>
      <div>
        <label for="msg">
          Nachricht:
        </label>
        <textarea placeholder="Nachricht..." required id="msg" name="msg"></textarea>
      </div>
      <div>
        <label for="typ">
          Kontaktgrund:
        </label>
        <select name="typ" id="typ">
          <option value="bugreport">Bug-Report</option>
          <option value="feedback">Feedback</option>
          <option value="anfrage">Anfrage</option>
        </select>
      </div>
      <div>
        <label for="box"><a href="/php/datenschutz.php">Datenschutzerklärung</a> akzeptiert:</label>
        <input type="checkbox" required id="box" name="privacy" />
      </div>
      <button type="submit">Absenden</button>
    </form>
  </main>
  <?php
  include "templates/footer.php";
  echo gen_footer(__FILE__);
  ?>
</body>

</html>