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
  <div class="flex flex-column">
    <h1>Quellen, Videos und Audios</h1>
    <h2>Quelle:</h2>
    <h3>Jedi Fandom:</h3>
    <div class="card">
      <details>
        <summary>
          Quellen
        </summary>
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
      </details>
    </div>
    <div class="flex flex-column">
      <h2>Videos:</h2>
      <video controls>
        <source src="https://www.moviejones.de/trailer/serien/themandalorian_s02_trl2dt.mp4">
      </video>
      <iframe src="https://www.youtube-nocookie.com/embed/EjPAqY09fkQ?controls=0" title="YouTube video player" allowfullscreen></iframe>
    </div>
    <div class="flex flex-column">
      <h2>Audio:</h2>
      <audio controls>
        <source src="../assets/audio/theme.mp3">
      </audio>
    </div>
  </div>

  <?php
  include "templates/footer.php";
  echo gen_footer(__FILE__);
  ?>
</body>

</html>