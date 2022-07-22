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
  echo generate_og_tags($title, "Eine Zusammenfassung von mandalorianischen Clans");
  ?>
</head>

<body>
  <?php
  include "templates/navbar.php";
  echo gen_navbar(__FILE__);
  ?>
  <div class="container container-flex">
    <h1>Clans</h1>
    <div class="card-container">
      <div class="card bg-gray-700 gray-300">
        <div class="flex-column">
          <h3>Clan Fett</h3>
          <img class="image" src="../assets/images/clans/fett.webp" alt="clan fett">
          <details>
            <summary>Clan Fett </summary>

            Der Fett-Clan war ein alter mandalorianischer Clan. Die Geschichte lässt sich bis in die Tage der Neuen Republik zurückverfolgen.
            Erstmalige Erwähnung fand der Nachname „Fett“ zur Zeit der Mandalorianischen Kriege um 3976 VSY. Hier war der Mandalorianer Cassus Fett als führender Stratege unter dem Mand'alor für den Völkermord von Cathar verantwortlich, den er inszenierte, um die Republik zu provozieren und in den Krieg zu zwingen. Zur Zeit der Alten Republik, während des Kalten Krieges zwischen Republik und Imperium wurde der Mandalorianer Vorten Fett auf Taris gesichtet. Es ist jedoch nicht bestätigt, ob eine, und wenn ja welche, Verwandtschaft zwischen Cassus Fett, Vorten Fett und den späteren Jango und Boba Fett bestand.

          </details>
        </div>
      </div>
      <div class="card bg-gray-700 gray-300">
        <div class="flex-column">

          <h3>Clan Vizsla</h3>
          <img class="image" src="../assets/images/clans/vizsla.webp" alt="clan vizsla">
          <details>
            <summary>Clan Vizsla</summary>
            Der Vizsla-Clan war ein alter mandalorianischer Clan. Traditionell gehörten seine bekannten Mitglieder der Death Watch an, einer Splittergruppe der Mandalorianer, die die Neuen Mandalorianer vernichten und das mandalorianische Imperium wiederaufbauen wollten, doch gab es auch Mitglieder des Clans, die eben diesen Neuen Mandalorianern angehörten.
            Die Vizslas waren ein Stamm stolzer Krieger, schon seit Jahrtausenden. Vorfahren von Pre Vizsla, dem Führer der Death Watch während der Klonkriege, kämpften in den Tagen der Alten Republik gegen die Jedi und stahlen unter anderem ein Dunkelschwert aus dem Jedi-Tempel auf Coruscant.
            Tor Vizsla war der Anführer der Death Watch im mandalorianischen Bürgerkrieg. Er hasste die Neuen Mandalorianer und ebenso die Wahren Mandalorianer. Im Bürgerkrieg tötete er Jaster Mereel, den Führer der Wahren Mandalorianer.
          </details>
        </div>
      </div>
      <div class="card bg-gray-700 gray-300">
        <div class="flex-column">

          <h3>Clan Wren</h3>
          <img class="image" src="../assets/images/clans/wren.webp" alt="clan wren">
          <details>
            <summary>Clan Wren</summary>
            Clan Wren war ein Mandalorianischer Clan des Hauses Vizsla, der zur Zeit des Galaktischen Imperiums von Ursa Wren angeführt wurde. Zu dieser Zeit war Clan Wren mit Clan Saxon und dem Imperium verbündet, doch als Sabine Wren die Imperiale Akademie verließ, nahm Gar Saxon Alrich Wren, Ursas Ehemann, gefangen, um deren Loyalität sicherzustellen. Tristan Wren kämpfte außerdem in Gar Saxons Einheit, um die Ehre des Clans wiederherzustellen. Nach einiger Zeit versöhnten sich Sabine und Ursa jedoch, Alrich wurde befreit, Tristan verließ die Einheit, der Clan schloss sich Bo-Katan Kryze an und Ursa tötete Gar Saxon. Daraufhin brach ein Konflikt zwischen Clan Saxon und Clan Wren aus, wobei letzterer mit vielen anderen Clans um Haus Kryze und die Allianz zur Wiederherstellung der Republik verbündet war.
          </details>
        </div>
      </div>
      <div class="card bg-gray-700 gray-300">
        <div class="flex-column">

          <h3>Clan Saxon</h3>
          <img class="image" src="../assets/images/clans/saxon.webp" alt="clan saxon">
          <details>
            <summary>
              Clan Saxon
            </summary>
            Clan Saxon war ein mandalorianischer Clan von Haus Vizsla. Zur Zeit des Galaktischen Imperiums wurde er von Gar Saxon angeführt. Nachdem dieser von Ursa Wren getötet worden war, brach ein Konflikt mit dem Wren-Clan aus, und Tiber Saxon übernahm die Führung. Er war dem Imperium zu dieser Zeit treu ergeben.
          </details>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "templates/footer.php";
  echo gen_footer(__FILE__);
  ?>
</body>

</html>