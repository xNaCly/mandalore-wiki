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
  echo generate_og_tags($title, "Die Geschichte Mandalores");
  ?>
</head>

<body>
  <?php
  include "templates/navbar.php";
  echo gen_navbar(__FILE__);
  ?>
  <div class="container container-flex">
    <h1>Quellen, Videos und Audios</h1>
    <div class="card">
      <h2>Quelle:</h2>
      <h3>Jedi Fandom:</h3>
      <ul>
        <li>
          <a href="https://jedipedia.fandom.com/wiki/Mandalorianer">Mandalorianer</a>
        </li>
        <li>
          <a href="https://jedipedia.fandom.com/wiki/Mandalore">Mandalore</a>
        </li>
        <li>
          <a href="https://jedipedia.fandom.com/wiki/Mandalorianischer_Clan">Mandalorianische Clans</a>
        </li>
      </ul>
    </div>
    <div class="flex-column">
      <h2>Videos:</h2>
      <div>
        <video controls>
          <source src="../assets/videos/mando_trailer.mp4">
        </video>
      </div>
      <div>
        <iframe src="https://www.youtube-nocookie.com/embed/EjPAqY09fkQ?controls=0" title="YouTube video player" allowfullscreen></iframe>
      </div>
    </div>
    <div>
      <h2>Audio:</h2>
      <audio controls>
        <source src="../assets/audio/theme.mp3">
      </audio>
    </div>
  </div>

  <?php
  include "templates/footer.php";
  ?>
</body>

</html>