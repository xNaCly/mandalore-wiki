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
  <div class="container-flex">
    <h1>Clans</h1>
    <h3>Clan Fett, Clan Vizsla, Clan Wren, Clan Saxon</h3>
  </div>

  <div class="container clan-logo-container">
    <div class="clan-logo-subcontainer">
      <span class="clan-logo-name ft-bold">Clan Fett</span>
      <img src="assets/images/clans/images_clans_fett.webp" alt="clan fett" class="clan-logo">
      <details>
        <summary class="clan-logo-summary-text">Details anzeigen</summary>
        <p>
          Clan Fett was a Mandalorian Clan that consisted
          of some of the most infamous members of the
          Mandalorian culture to exist. Members of the
          clan were known for their tactical superiority
          and for being skilled warriors. At some point
          between the end of the Mandalorian Wars and the
          start of the Mandalorian Civil War, a majority
          of Clan Fett's members were either wiped out
          or had abandoned the Mandalorian ways.
          Eventually, though, some members of Clan Fett
          would find their way back into Mandalorian
          culture, such as Jango Fett, who was adopted
          by Mand'alor, Jaster Mereel after his parents
          were murdered by Death Watch.
        </p>
      </details>
    </div>
    <div class="clan-logo-subcontainer">
      <span class="clan-logo-name ft-bold">Clan Vizsla</span>
      <img src="assets/images/clans/images_clans_vizsla.webp" alt="clan vizsla" class="clan-logo">
      <details>
        <summary class="clan-logo-summary-text">Details anzeigen</summary>
        <p>
          Clan Fett was a Mandalorian Clan that consisted
          of some of the most infamous members of the
          Mandalorian culture to exist. Members of the
          clan were known for their tactical superiority
          and for being skilled warriors. At some point
          between the end of the Mandalorian Wars and the
          start of the Mandalorian Civil War, a majority
          of Clan Fett's members were either wiped out
          or had abandoned the Mandalorian ways.
          Eventually, though, some members of Clan Fett
          would find their way back into Mandalorian
          culture, such as Jango Fett, who was adopted
          by Mand'alor, Jaster Mereel after his parents
          were murdered by Death Watch.
        </p>
      </details>
    </div>

    <div class="clan-logo-subcontainer">
      <span class="clan-logo-name ft-bold">Clan Wren</span>
      <img src="assets/images/clans/images_clans_fett.webp" alt="clan fett" class="clan-logo">
      <details>
        <summary class="clan-logo-summary-text">Details anzeigen</summary>
        <p>
          Clan Fett was a Mandalorian Clan that consisted
          of some of the most infamous members of the
          Mandalorian culture to exist. Members of the
          clan were known for their tactical superiority
          and for being skilled warriors. At some point
          between the end of the Mandalorian Wars and the
          start of the Mandalorian Civil War, a majority
          of Clan Fett's members were either wiped out
          or had abandoned the Mandalorian ways.
          Eventually, though, some members of Clan Fett
          would find their way back into Mandalorian
          culture, such as Jango Fett, who was adopted
          by Mand'alor, Jaster Mereel after his parents
          were murdered by Death Watch.
        </p>
      </details>
    </div>

    <div class="clan-logo-subcontainer">
      <span class="clan-logo-name ft-bold">Clan Saxon</span>
      <img src="assets/images/clans/images_clans_fett.webp" alt="clan fett" class="clan-logo">
      <div>
        <details>
          <summary class="clan-logo-summary-text">Details anzeigen</summary>
          <p>
            Clan Fett was a Mandalorian Clan that consisted
            of some of the most infamous members of the
            Mandalorian culture to exist. Members of the
            clan were known for their tactical superiority
            and for being skilled warriors. At some point
            between the end of the Mandalorian Wars and the
            start of the Mandalorian Civil War, a majority
            of Clan Fett's members were either wiped out
            or had abandoned the Mandalorian ways.
            Eventually, though, some members of Clan Fett
            would find their way back into Mandalorian
            culture, such as <mark>Jango Fett</mark>, who was adopted
            by Mand'alor, Jaster Mereel after his parents
            were murdered by Death Watch.
          </p>
        </details>
      </div>
    </div>
  </div>
</body>

</html>