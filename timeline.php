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
  echo generate_og_tags($title, "Ein Überblick über Medien die mandalorianische Geschichte enthalten");
  ?>
</head>

<body>
  <?php
  include "./php/templates/navbar.php";
  echo gen_navbar(__FILE__);
  ?>
  <div class="container container-flex">
    <h1>Timeline:</h1>



    <div class="timeline-container">
      <table class="timeline-table">
        <caption>
          Zeitleiste der für Mandalore wichtigen Filme und Serien im <em>Star Wars</em> Universum
        </caption>
        <tbody>
          <tr>
            <th class="timeline-heading" colspan="2" rowspan="3">Filme und Serien</th>
            <th class="timeline-heading" colspan="46">Fiktive Zeitrechnung in Jahren</th>
          </tr>
          <tr>
            <th class="timeline-heading" colspan="28">Vor der Schlacht um Yavin 4</th>
            <th class="timeline-heading" colspan="18">Nach der Schlacht um Yavin 4</th>
          </tr>
          <tr class="timeline-years">
            <th>33</th>
            <th>32</th>
            <th>31</th>
            <th>30-24</th>
            <th>23</th>
            <th>22</th>
            <th>21</th>
            <th>20</th>
            <th>19</th>
            <th>18</th>
            <th>17-15</th>
            <th>14</th>
            <th>13</th>
            <th>12</th>
            <th>11</th>
            <th>10</th>
            <th>9</th>
            <th>8</th>
            <th>7</th>
            <th>6</th>
            <th>5</th>
            <th>4</th>
            <th>3</th>
            <th>2</th>
            <th>1</th>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11-31</th>
            <th>32</th>
            <th>33</th>
            <th>34</th>
            <th>35</th>
            <th>36</th>
          </tr>
          <tr>
            <td class="timeline-heading">Angriff der Klonkrieger</td>
            <td rowspan="1" class="legende-atc"></td>
            <td rowspan="5"></td>
            <td rowspan="5"></td>
            <td rowspan="5"></td>
            <td rowspan="5"></td>
            <td rowspan="5"></td>
            <td class="legende-atc">II</td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
          </tr>
          <tr>
            <td class="timeline-heading">The Clone Wars</td>
            <td rowspan="1" class="legende-tcw"></td>
            <td colspan="4" class="legende-tcw"><abbr title="The Clone Wars">TCW</abbr>
            </td>
          </tr>
          <tr>
            <td class="timeline-heading">Rebels</td>
            <td rowspan="1" class="legende-rebels"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td rowspan="3"></td>
            <td colspan="5" class="legende-rebels">Rebels</td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
            <td rowspan="1"></td>
          </tr>
          <tr>
            <td class="timeline-heading">The Mandalorian</td>
            <td rowspan="1" class="legende-mandalorian"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td class="legende-mandalorian">Mando</td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
            <td rowspan="2"></td>
          </tr>
          <tr>
            <td class="timeline-heading">Book of Boba Fett</td>
            <td rowspan="1" class="legende-bobf"></td>
            <td class="legende-bobf">Boba</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-container card-container-timeline">
      <article class="card  bg-gray-700 gray-300">
        <div>
          <img class="image" src="assets/images/angriffderclonkrieger.webp" alt="angriff der klonkrieger">
        </div>
        <span>
          Der zweite Film der Prequals <strong>(Angriff der Klonkrieger)</strong> hat besondere Signifikanz für das Auseinandersetzen des Jediordens mit den Mandalorianern, da hier Obi Wan Kenobi das erste Mal auf einen Mandalorianer namens <a href="">Jango Fett</a> trifft als er diesen durch die Galaxie aufgrund eines Attentatversuches auf die Prinzessin Amidala von Naboo jagte. Dieser Mandalorianer stirbt im Laufe des Filmes und hinterlässt seinen identischen und genetisch unveränderten Sohn dessen Schiff und seine Rüstung.
        </span>
      </article>
      <article class="card  bg-gray-700 gray-300">
        <div>
          <img class="image" src="assets/images/klonkriege.webp" alt="angriff der klonkrieger">
        </div>
        <span>
          Die erste animierte Serie im Star Wars Universium erklärt politische Zusammenhänge bezüglich Mandalore und die kriegerische Vergangenheit sowie die terroristischen mandalorianischen Organisationen und der Machthunger der Mandalorianer. Hinzukommt, dass der Zuschauer die Korruption im Senat und auf Mandalore zu Gesicht bekommt. Sie thematisiert das Dilemma der Seperatisten und die Machtstrukturen der Mandalorianer sowie deren Verbissenheit. Außerdem sehen wir wie die Deathwatch von Count Dooku und später von Darth Maul benutzt werden.
        </span>
      </article>
      <article class="card  bg-gray-700 gray-300">
        <div>
          <img class="image" src="assets/images/rebels.webp" alt="rebels">
        </div>
        <span>
          Die oftmals harsch kritisierte Serie Star Wars Rebels beleuchtet mehrere Folgen lang die Beziehung der Clans von Mandalore zum Imperium, die Nacht der tausend Tränen und die Konflikte der Clans untereinander. Rebels geht besonders auf Clan Vren ein und zeigt wie Zerrissen die Clanmitglieder sind und wie sehr sie unter der Belagerung des Imperiums leiden. Besonders interessant ist auch der Zusammenschluss verschiedener Clans zum Vereinigen von Mandalore zuerst unter Sabine Vren und Später unter Bo Kataan. Zudem werden Themen angesprochen wie das Darksaber und dessen Entstehungsgeschichte.
        </span>
      </article>
      <article class="card  bg-gray-700 gray-300">
        <div>
          <img class="image" src="assets/images/mando.webp" alt="mandalorian">
          <img class="image" src="assets/images/blacksmith.webp" alt="mandalorian-blacksmith">
        </div>
        <span>
          Die preisgekrönte Disney+ Serie <strong>The Mandalorian</strong> thematisiert nicht nur die Findling Tradition der Mandalorianer sondern auch die unterschiedlichen Extremistischen Gruppierungen innerhalb der Mandalorianer. Auch hier wird das Darksaber und dessen Relevanz für das Volk der Mandalorianer angesprochen. Zudem bekommen wir zu Gesicht wie die verbleibenden Mandalorianer sich vor den Resten des Imperiums und der neuen Republik verstecken und ihren Lebensunterhalt als Mitglieder in Kopfgeldjägergilden verdienen. Wir lernen in dieser Serie Mandalorianische Traditionen, Schmiedehandwerk und Regeln kennen.
        </span>
      </article>
      <article class="card bg-gray-700 gray-300">
        <img class="image" src="assets/images/bobafett.webp" alt="boba fett">
        <span>
          Das Book of Boba Fett handelt grundsätzlich von Boba Fetts Geschichte, d.h. wie er den Sarlac überlebte und mit den Sandmenschen zusammenlebte.
          Wirklich relevant für die Mandalorianische Geschichte sind hier nur Ausschnitte, wie Bobas Rüstung, das für Mandalorianer typische Jagen und Zähmen von wilden Tieren und Kampfszenen die bestimmte Gadgets darstellen, wie z.B.: Whistling Arrows, JetPacks und Thermaldetonatoren.
        </span>
      </article>
    </div>
  </div>
  <?php
  include "./php/templates/footer.php";
  ?>
</body>