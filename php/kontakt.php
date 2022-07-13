<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/font.css">
  <?php
  require(dirname(__FILE__) . "./templates/header.php");
  require(dirname(__FILE__) . "./util/util.php");
  require(dirname(__FILE__) . "./util/opengraph.php");
  $title = format_title(__FILE__);
  echo "
    <title>
      $title
    </title>";
  echo generate_og_tags($title, "Kontaktform");
  ?>
</head>

<body>

  <main class="container container-flex contact-container">
    <?php
    try {
      $email = isset($_GET['email']) ? $_GET['email'] : '';
      $name = isset($_GET['name']) ? $_GET['name'] : '';
      $privacy = isset($_GET['privacy']) ? $_GET['privacy'] : '';
      $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
      $reason = isset($_GET['typ']) ? $_GET['typ'] : '';
    } catch (Exception $e) {
      echo "<span class='warning'>Fehlende Parameter in der Anfrage!</span>";
      exit;
    }

    if (is_null($privacy) || strcmp($privacy, "on") !== 0) {
      echo "<span class='warning'>Die Datenschutzerklärung muss akzeptiert werden!</span>";
    } else if (is_null($email) || !str_contains($email, "@") || !str_contains($email, ".")) {
      echo "<span class='warning'>Email <pre>'$email'</pre> ist undefiniert oder vermisst ein <pre>'@'</pre> oder ein <pre>'.'</pre>, versuchs nocheinmal.</span>";
    } else if (is_null($name) || strlen($name) < 2) {
      echo "<span class='warning'>Name <pre>'$name'</pre> ist zu kurz oder undefiniert, versuchs nocheinmal.</span>";
    } else if (is_null($msg) || strlen($msg) < 2) {
      echo "<span class='warning'>Nachricht <pre>'$msg'</pre> ist zu kurz oder undefiniert, versuchs nocheinmal.</span>";
    } else if (
      is_null($reason) ||
      (strcmp($reason, "feedback") !== 0 && strcmp($reason, "bugreport") !== 0 && strcmp($reason, "Anfrage") !== 0)
    ) {
      echo "<span class='warning'>Grund fehlt oder ist inkorrekt.</span>";
    } else {
      echo "<span class='success'>Kontaktanfrage eingegangen.</span>";
      echo "<div>
        <p>Name: $name</p>
        <p>Email: $email</p>
        <p>Grund: $reason</p>
        <p>Nachricht: $msg</p>
      </div>";
    }
    echo "<a href='../'>Zurück nach Mandalore</a>";
    ?>
  </main>
</body>

</html>