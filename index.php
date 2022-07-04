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
  <main class="container container-flex homepage-container">
    <img class="image" alt="the mandalorian fighting stormtroopers" src="./assets/images/din-fighting.webp">
    <article class="card-container">
      <section class="card bg-gray-700 gray-300">
        <h3 id="mandalore">Mandalore - Begriff</h3>
        <img class="image" src="./assets/images/mandalore.webp" alt="mandalore">
        <p>
          <a href="#mandalore">Mandalore</a>,
          oder Manda'yaim, ist der angestammte Heimatplanet
          der <a href="#mandalorianer">Mandalorianer</a> und
          wird als Zentrum ihrer Kultur betrachtet.
        </p>
      </section>
      <section id="big-card" class="card bg-gray-700 gray-300">
        <h3 id="mandalore-geo">Mandalore - Geografie</h3>
        <span>
          Mandalore liegt im Äußeren Rand und zeichnet sich durch ein tropisches Klima aus.
          Der Planet ist mit dichtem Dschungel bewachsen, daneben gibt es einige Wüstenregionen
          und nur wenig fruchtbares Farmland. Die wichtigste Metropole ist die Hauptstadt Keldabe.
          Während der Klonkriege war die Hauptstadt Sundari, die in einer Ödlandschaft unter einer Kuppel existierte.
          Der Planet ist mit ca. vier Millionen Einwohnern relativ dünn besiedelt.
        </span>
        <table>
          <tr>
            <th>Geografie</th>
            <th>-</th>
          </tr>
          <tr>
            <th>Region</th>
            <td>Äußerer Rand</td>
          </tr>
          <tr>
            <th>Klima</th>
            <td>Tropisch</td>
          </tr>
          <tr>
            <th>Atmosphäre</th>
            <td>Sauerstoffgemisch</td>
          </tr>
          <tr>
            <th>Tageslänge</th>
            <td>19 Stunden</td>
          </tr>
          <tr>
            <th>Jahreslänge</th>
            <td>366 Tage</td>
          </tr>
          <tr>
            <th>Sprache</th>
            <td>Mando'a</td>
          </tr>
          <tr>
            <th>Export</th>
            <td>Waffen, Beskar</td>
          </tr>
          <tr>
            <th>Import</th>
            <td>Maschinen, Rohstoffe aller Art</td>
          </tr>
          <tr>
            <th>Besonderheiten</th>
            <td>Sehr kriegerisch gegen Außenweltler und andere Clans</td>
          </tr>
        </table>
      </section>
    </article>
    <article class="container-flex card-container">
      <section class="card big-card bg-gray-700 gray-300">
        <h3 id="mandalorianer">Mandalorianer - Begriff</h3>
        <span>
          Die Mandalorianer, informal kurz Mandos genannt, sind ein <a href="./clans">clanbasiertes</a> Volk. Ihre Geschichte ist voller Gewalt und Konflikte. Ursprünglich stammten sie von <a href="#mandalore">Mandalore</a> und legten sich regelmäßig mit den Jedi an und führten Kriege gegen diese.</span>
      </section>
      <section class="card bg-gray-700 gray-300">
        <h3 id="mandalorianer-waffen">Mandalorianer - Waffen</h3>
        <span>
          Die Mandalorianer trugen eine besondere Rüstung, die aus <a href="#beskar">Beskar</a> bestand.
          Die Rüstungen waren teils hunderte von Jahren alt und sind daher ein wichtiger
          Teil mandalorianischer Geschichte, da sie all die Schlachten miterlebt hatten.
          Bekannt sind sie für ihre <a href="#jetpack">Jet-Packs</a>, mit denen sie Gegner aus der Luft angriffen.
          Oft nutzten sie WESTAR-35-Blasterpistolen als Bewaffnung.
        </span>
      </section>
    </article>
    <article class="container-flex card-container">
      <section class="card bg-gray-700 gray-300">
        <h3 id="beskar">Beskar</h3>
        <img class="image" alt="beskar" src="./assets/images/beskar.webp">
        <p>Beskar ist eine Legierung, die direkten Blasterschüssen und einem Lichtschwerthieb standhalten kann.</p>
      </section>
      <section class="card biggest-card bg-gray-700 gray-300">
        <h3 id="jetpack">Jetpack</h3>
        <img class="image" alt="jetpack" src="./assets/images/jetpack.webp">
        <p>Ein Jetpack ist ein tragbarer Düsenantrieb, der auf den Rücken geschnallt wird, um sich für kurze Zeiträume frei in der Luft oder im Raum zu bewegen.</p>
      </section>
    </article>
  </main>
</body>

</html>