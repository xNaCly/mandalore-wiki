<!DOCTYPE html>
<html lang="de">

<head>

  <link rel='stylesheet' href='css/style.css' type='text/css'>
  <link rel='stylesheet' href='css/fonts.css' type='text/css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v6.1.1/css/all.css' />
  <?php
  include "./php/util/util.php";
  include "./php/util/opengraph.php";
  $title = format_title(__FILE__);
  echo "
    <title>
      $title
    </title>";
  echo generate_og_tags($title, "Ein ausführliches und ansehnliches Wiki über Mandalore und Mandalorianer");
  ?>
</head>

<body>
  <?php
  include "./php/templates/navbar.php";
  echo gen_navbar(__FILE__);
  ?>

  <main class="container container-flex homepage-container">
    <figure>
      <img class="image" alt="the mandalorian fighting stormtroopers" src="./assets/images/din-fighting.webp">
      <figcaption>Mandalorianer Din Djarin kämpft gegen Sturmtruppler</figcaption>
    </figure>
    <article class="card-container card-container-home">
      <section class="card  bg-gray-700 gray-300">
        <h3 id="mandalore">Mandalore - Begriff</h3>
        <div>
          <img class="image" src="./assets/images/mandalore.webp" alt="mandalore">
        </div>
        <span>
          <a href="#mandalore">Mandalore</a>,
          oder Manda'yaim, ist der angestammte Heimatplanet
          der <a href="#mandalorianer">Mandalorianer</a> und
          wird als Zentrum ihrer Kultur betrachtet. Trotzdessen leben viele Mandalorianer auf Mandalores Monden oder in anderen Sternensystemen.
        </span>
        <blockquote><em>"That planet is cursed. Anyone who goes there dies."</em> - <span class="author">Din Djarin</span></blockquote>
      </section>
      <section class="card  bg-gray-700 gray-300">
        <h3 id="mandalore-geo">Mandalore - Geografie</h3>
        <span>
          Mandalore liegt im Äußeren Rand und zeichnet sich durch ein tropisches Klima aus.
          Der Planet ist mit dichtem Dschungel bewachsen, daneben gibt es einige Wüstenregionen
          und nur wenig fruchtbares Farmland. Die wichtigste Metropole ist die Hauptstadt <strong>Keldabe</strong>.
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
            <td><a href="#mandalorianer-waffen">Waffen</a>, <a href="#beskar">Beskar</a></td>
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
      <section class="card  bg-gray-700 gray-300">
        <h3 id="mandalorianer">Mandalorianer - Begriff</h3>
        <div>
          <img class="image" alt="war" src="./assets/images/deathwatch.webp">
          <!-- <img class="image" alt="armour" src="./assets/images/Jangofullarmor.webp"> -->
          <img class="image" alt="jetpack2" src="./assets/images/jetpack2.webp">
        </div>
        <span>
          Die Mandalorianer, informal kurz Mandos genannt, sind ein <a href="./php/clans">clanbasiertes</a> Volk. Ihre Geschichte ist voller Gewalt und Konflikte. Ursprünglich stammten sie von <a href="#mandalore">Mandalore</a> und legten sich regelmäßig mit den Jedi an und führten Kriege gegen diese.</span>
      </section>
      <section class="card  bg-gray-700 gray-300">
        <h3 id="beskar">Beskar</h3>
        <div>
          <img class="image" alt="beskar" src="./assets/images/beskar2.webp">
        </div>
        <span>Beskar ist eine Legierung, die direkten Blasterschüssen und einem Lichtschwerthieb standhalten kann.</span>
      </section>
      <section class="card  bg-gray-700 gray-300">
        <h3 id="jetpack">Jetpack</h3>
        <div style="max-width: fit-content">
          <img class="image" alt="jetpack" src="./assets/images/jetpack.webp">
        </div>
        <span>Ein Jetpack ist ein tragbarer Düsenantrieb, der auf den Rücken geschnallt wird, um sich für kurze Zeiträume frei in der Luft oder im Raum zu bewegen. Zudem befindet sich eine lenkbare Rakete, oftmals auch getauscht mit einem Peilsender, im Jetpack.</span>
      </section>
      <section class="card  bg-gray-700 gray-300">
        <h3 id="mandalorianer-waffen">Ausrüstung</h3>
        <div>
          <img class="image" alt="blaster" src="./assets/images/blaster.webp">
          <img class="image" alt="weapons" src="./assets/images/weapons.webp">
        </div>
        <span>
          Die Mandalorianer trugen eine besondere Rüstung, die aus <a href="#beskar">Beskar</a> bestand.
          Die Rüstungen waren teils hunderte von Jahren alt und sind daher ein wichtiger
          Teil mandalorianischer Geschichte, da sie all die Schlachten miterlebt hatten.
          Bekannt sind sie für ihre <a href="#jetpack">Jet-Packs</a>, mit denen sie Gegner aus der Luft angriffen.
          Oft nutzten sie WESTAR-35-Blasterpistolen als Bewaffnung.
        </span>
      </section>
      <section class="card bg-gray-700 gray-300">
        <h3>Raumschiffe</h3>
        <div>
          <img class="image" src="./assets/images/slave1.webp" alt="slave_1">
          <img class="image" src="./assets/images/rezorcrest.webp" alt="razor_crest">
        </div>
        <span>
          Mandalorianer flogen oftmals ikonische, schwer bewaffnete und wendige Raumschiffe. Wie hier zum Beispiel das Raumschiff Jango Fetts und später Boba Fetts. Die Slave
          <code>I</code> besaß seimische Bomben, Ionen-Kanonen, Protonentorpedos, Peilsenderwerfer und einen Hyperraum antrieb. Außerdem noch eine Schlafkammer und genug Stauraum für diverse Gefangene. Das andere hier gezeigte Beispiel ist mehr Frachter als Kampfschiff, kann aber trotzdem austeilen sowie einstecken. Das Schiff Din Djarins besaß zwei Lasergeschütze, einen sehr geräumigen Waffenschrank, Stauraum für Gefangene und sogar eine Toilette. Alle drei hier genannten Mandalorianer waren einmal Kopfgeldjäger und nutzen ihre Raumschiffe um diese zu jagen, daher waren diese als wendig aber durchschlagskräftig konzipiert. Die Slave <code>I</code> war ursprünglich ein Gefangenentransporter und die Razor crest ein Kanonenboot eines unabhängigen Systemes.
        </span>
      </section>
      <section class="card  bg-gray-700 gray-300">
        <h3 id="sechshandlungen">Resol'nare / Sechs Handlungen</h3>
        <div>
          <img class="image" src="./assets/images/schmiede.webp" alt="schmiede">
        </div>
        <span>
          Mandalorianer ist nur wer sich an die folgenden Regeln hält:
        </span>
        <ol>
          <li>Seine Kinder als Mandalorianer zu erziehen</li>
          <li>Die traditionelle Rüstung tragen</li>
          <li>Selbstverteidigung</li>
          <li>Zum Wohl des Clans beizutragen</li>
          <li>Die Sprache Mando'a sprechen</li>
          <li>Sich dem Mandalore anzuschließen, wenn er zu den Waffen ruft</li>
        </ol>
      </section>
    </article>
    <br>

  </main>
  <?php
  include "./php/templates/footer.php";
  echo gen_footer(__FILE__);
  ?>
</body>

</html>