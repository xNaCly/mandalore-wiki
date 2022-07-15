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
    <h1>Geschichte</h1>
    <div class="container">
      <pre>Inhaltsverzeichnis:</pre>
      <ol>
        <li>
          <a href="#ursprung">Ursprung</a>
        </li>
        <li>
          <a href="#mandalore">Mandalore</a>
        </li>
        <li>
          <a href="#kreuzzug">Kreuzzug</a>
        </li>
        <li>
          <a href="#sith">Sith-Kriege</a>
        </li>
        <li>
          <a href="#mandkrie">Mandalorianische Kriege</a>
        </li>
        <li>
          <a href="#kopfgeld">Söldner und Kopfgeldjäger</a>
        </li>
        <li>
          <a href="#mandbuergerkrieg">Mandalorianischer Bürgerkrieg</a>
        </li>
        <li>
          <a href="#spender">Der Genspender</a>
        </li>
        <li>
          <a href="#klonkrieg">Klonkriege</a>
        </li>
        <li>
          <a href="#imp">Imperiale Ära</a>
        </li>
        <li>
          <a href="#allianz">Galaktische Allianz</a>
        </li>
      </ol>

      <h2 id="ursprung">Ursprung</h2>
      <div class="flex">
        <div>

          <p>Die Mandalorianer bestehen aus Angehörigen der verschiedensten Spezies, verbunden durch eine gemeinsame Sprache - Mando’a - und eine gemeinsame Kultur, die strengen Richtlinien folgt: den Resol’Nare, den Sechs Handlungen, die die mandalorianische Identität ausmachen (Details dazu siehe unten). Unter den Angehörigen dieses gemischten Volkes finden sich in der überwiegenden Mehrheit Menschen und andere humanoide Völker, aber auch so exotische Spezies wie die Togorianer oder Kerestianer. Trotz der heterogenen Zusammensetzung weisen viele menschliche Mandalorianer gemeinsame genetische Merkmale auf; die größte genetische Übereinstimmung haben sie mit den Bewohnern von Concord Dawn und anderen Planeten dieses Sektors.</p>
          <p>Die Herkunft und Vergangenheit spielt jedoch keine Rolle, so lange eine Person sich den <a href="../#sechshandlungen">Resol Nare</a> verpflichtet und diese ernsthaft praktiziert. </p>
        </div>
        <img class="image" src="../assets/images/geschichte/taung.png" alt="taung" />
      </div>

      <h2 id="mandalore">Mandalore</h2>
      <div class="flex">
        <img class="image" src="../assets/images/geschichte/mandalore.jpg" alt="mandalore" />

        <p>
          Die "ersten Mandalorianer" zogen durch den Äußeren Rand, bis sie auf einen Planeten stießen, der von mammutartigen Mythosauriern bevölkert war. Die Krieger rotteten diese gigantischen Tiere aus und errichteten aus ihren Knochen die berühmte "Knochenstadt", eine spektakuläre Festung, die erst nach den Klonkriegen zerstört wurde. Der Legende nach wurde der Planet zu Ehren des Anführers "Mandalore" genannt und galt fortan als "Heimatwelt" der Mandalorianer, auch wenn sie dort weder ursprünglich herstammten, noch dort dauerhaft blieben. Tatsächlich haben viele der heute lebenden Mandalorianer diesen Planeten niemals gesehen.
        </p>
      </div>

      <h2 id="kreuzzug">Kreuzzug</h2>
      <div class="flex">
        <div>

          <p>
            Die nomadisch lebenden Krieger waren eine Weile mit ihrem Leben auf Mandalore zufrieden, bevor sie zur Zeit der Großen <a href="#sith">Sith-Kriege</a> (ca. 4000 VSY) begannen, ihr Reich auszudehnen und neue Welten zu erobern und ebenfalls zu ihrer "Heimat" zu erklären. "Heimat" wurde schließlich so definiert, dass sie sich immer dort befand, "wo die Maske des Mandalore hing". Die bekanntesten eroberten Welten waren das für seine Gladiatorenkämpfe berühmte Kuar und Shogun.
          </p>
          <p>
            Die Clans folgten einem "Kanon der Ehre" und lebten nach der Philosophie, dass man Ehre insbesondere durch Kampf und Loyalität zu seinem Clan erlangte. Trotz dieses "Kanons" beschränkten sich die Handlungen dieser als "Mandalorianische Crusader" bekannten Truppen oft auf Plünderungen und das Erbeuten wertvoller Waffen. Ihre Überzeugung, sich auf einem "Kreuzzug" zu befinden, führte zur Auslöschung ganzer Spezies, wie den Fenelar, Tlönianern, Kuaranern und Ithullanern. Lediglich eine Spezies widersetzte sich erfolgreich den Eindringlingen: die Mandallianischen Riesen, die sich den Respekt der Mandalorianer verdienten und sich ihnen schließlich sogar anschlossen.
          </p>

          <p>
            Die Abbildung links zeigt einen "Crusader" in seiner traditionellen Rüstung. Sie ist für Nahkampf mit Faust und Stichwaffen optimiert, der damals dem Kampf mit Schusswaffen vorgezogen wurde, da er größere Ehre versprach.
          </p>
        </div>
        <img class="image" src="../assets/images/geschichte/neocrusader.jpg" alt="neocrusader" />
      </div>

      <h2 id="sith">Sith-Kriege</h2>
      <p>
        Auf der Suche nach neuen Herausforderungen schlugen sich die Mandalorianer in den Großen Sith-Kriegen (4000 VSY) auf die Seite der Sith. Diesen Krieg gewannen die Jedi und die Galaktische Republik, doch die Niederlage provozierte die Mandalorianer nur umso mehr: seit dem Tag warteten sie auf ihre Chance, sich in einer "Letzten Großen Schlacht" zu beweisen.
      </p>
      <h2 id="mandkrie">Mandalorianische Kriege</h2>
      <p>
        Um nicht die Aufmerksamkeit der Republik zu erwecken, begannen die Mandalorianer, kleinere Planeten am Äußeren Rand anzugreifen und zu erobern. Dabei vermieden sie bewusst Welten, die mit der Republik in Kontakt standen oder ihr gar angehörten. Über 20 Jahre hinweg bauten sie auf diese Weise im Geheimen eine schlagkräftige Armee auf. Die Invasoren, die sich nun "Neo-Kreuzritter" nannten, ahnten, dass es zu einer gewaltigen Schlacht kommen würde, wenn die Republik herausfand, was sie planten, und rekrutierten deswegen prophylaktisch zahlreiche Einheimische der eroberten Welten und akzeptierten sie als Gleichberechtigte und "Konvertiten" in ihren Reihen. Drei Jahre lang marodierten sie gemeinsam in der Galaxis und lösten das aus, was als "Die Mandalorianischen Kriege" in die Geschichte einging.
      </p>
      <p>
        Schließlich setzte die Republik diesem Treiben ein Ende und schaffte es, den Anführer der Neo-Crusader, Mandalore den Ultimativen zu töten. Revan und Malak, zwei Jedi, die nach den Kriegen zu Sith wurden, leiteten die Entscheidungsschlacht bei Malachor V im Jahr 3960 VSY, die das Ende der Mandalorianer besiegelte und ihre Flotte fast vollständig auslöschte. Revan nutzte die Gelegenheit nicht, auch die restlichen Überlebenden zu eliminieren, wie ihm von vielen Seiten geraten wurde, um diesem kriegerischen Volk endgültig den Todesstoß zu geben, und so wurden die Mandalorianer lediglich ins Exil getrieben und gezwungen, sich in der ganzen Galaxis zu zerstreuen.
      </p>
      <h2 id="kopfgeld">Söldner und Kopfgeldjäger</h2>
      <p>
        Nachdem die Mandalorianer nur knapp ihrer eigenen Vernichtung entgangen waren, mussten sie sich neue Lebensweisen erschließen - sie konnten keine Armee oder Flotten mehr versammeln und waren zu wenige, um der Republik entschieden entgegentreten zu können. Deshalb begannen sie, ihre Kriegskünste in den Dienst anderer zu stellen, wobei sie nicht selten auch in ihren Augen "unehrenhafte" Aufgaben übernahmen: sie wurden Söldner, Kopfgeldjäger, Attentäter oder Leibwächter. Es spielte keine Rolle, für wen sie arbeiteten; sie folgten keiner Ideologie oder Politik, sondern stellten ihre Dienste demjenigen zur Verfügung, der am besten zahlte.
      </p>
      <p>
        Denn auch wenn Mandalorianer dafür bekannt sind, in der Gegenwart zu leben und sehr im Hier und Jetzt verwurzelt zu sein, so ist es auch wichtig für sie, Geld zu verdienen, um insbesondere ihren Kindern und Clanmitgliedern, die keine Krieger sind, sondern in der "Heimat" als Bauern, Schmiede oder sonstiges arbeiten, eine Zukunft sichern zu können. Noch heute haben die Mandalorianer deswegen den Ruf, erstaunlich geschäftstüchtig zu sein.
      </p>
      <h2 id="mandbuergerkrieg">Mandalorianischer Bürgerkrieg</h2>

      <div class="flex">
        <p>
          Nicht alle Mandalorianer waren zufrieden mit dieser Art der Existenz und ein großer Umbruch ereignete sich im Jahr 60 VSY, als Jaster Mereel, ein ehemaliger Journeyman Protector von Concord Dawn, feststellte, dass die Lebensweise als Söldner ohne eigene Überzeugung und nur auf der Jagd nach Geld vielen nicht genügte. Mereel war Anhänger einer strikten Ethik und zugleich ein sehr erfahrener und respektierter Kämpfer, was ihm Respekt und Ansehen einbrachte. Sein Ziel war es, der neue Mand’alor zu werden und die verstreuten Clans erneut zu vereinen, dieses Mal unter einem ethischen Kodex - dieser Kodex wurde bekannt als der "Superkommando-Kodex". Seine Anhänger nannten sich Superkommandos oder "Wahre Mandalorianer".
        </p>
        <img class="image" src="../assets/images/geschichte/deathwatch.jpg" alt="deathwatch" />
      </div>
      <p>
        So viele Anhänger Mereel auch fand, so viele Mandalorianer lehnten seine neuen Ideen und seinen Führungsstil ab, da sie das gewinnträchtige Leben mochten und Ideologien negativ gegenüberstanden, sondern lieber für denjenigen arbeiteten, der am meisten zahlte. Hier tat sich Tor Vizsla hervor, der seinerseits Anhänger um sich scharte und eine mandalorianische Splittergruppe bildete: die "Death Watch" (dt.: "Todeswache").
      </p>
      <p>
        Es entbrannte ein blutiger Bürgerkrieg zwischen diesen beiden Gruppen, der die fast vollständige Auslöschung der Mandalorianer zur Folge hatte. Im Laufe des Krieges stellte sich heraus, dass die "Wahren Mandalorianer" der undisziplinierten "Death Watch" taktisch und organisatorisch überlegen waren. So wurde die "Death Watch" nahezu vollständig zerschlagen, nur wenige Mitglieder (wie Ghez Hokan) überlebten den Bürgerkrieg.
      </p>
      <p>
        Doch auch die "Wahren Mandalorianer" hatten kein Glück - in der Schlacht von Galidraan gerieten sie in eine Falle der Death Watch und wurden von den Jedi für die Verantwortlichen eines Massakers auf Galidraan gehalten. Die Jedi unter der Führung von Dooku eliminierten fast alle Angehörigen dieser Bewegung. Nur ein "Wahrer Mandalorianer" überlebte: Jango Fett, der später Vizsla, den Anführer der Death Watch, auf Corellia tötete.
      </p>

      <h2 id="spender">Der Genspender</h2>
      <div class="flex">
        <img class="image" src="../assets/images/geschichte/jango-angeworben.jpg" alt="deathwatch" />
        <p>
          Im Jahr 32 VSY trat ein Mann namens Tyranus an Jango Fett heran, nachdem er den Kopfgeldjäger auf eine harte Probe gestellt hatte, und machte ihm ein verlockendes Angebot: Jango sollte, im Gegenzug für eine hohe Bezahlung, sein genetisches Material zur Verfügung stellen, um daraus eine Klonarmee für die Republik zu züchten. Jango willigte ein und stellte die Bedingung: Neben dem Geld wollte Jango einen Klon, aus seinen unveränderten reinen Genen. Jango erzog den Klon wie seinen eigenen Sohn - Boba Fett.
        </p>
      </div>
      <p>
        Jango wirkte, gemeinsam mit 75 weiteren Mandalorianern (viele davon alte Kampfgefährten oder Freunde von früher), an der Ausbildung der Klonarmee mit und übernahm persönlich die Ausbildung der Alpha ARCs, während sich die mandalorianischen Cuy'val Dar um die Eliteeinheiten der Republik-Kommandos kümmerten. Zur Ausbildung gehörte nicht nur die Kampfschulung, sondern auch die Vermittlung des mandalorianischen Erbes und der Kultur - so schrieb Jango traditionelle mandalorianische Schlachtgesänge wie das Vode An oder das Gra’tua Cuun um, um es an die Situation der Klonsoldaten anzupassen. Auch führte er das archaische Ritual Dha Werda Verda ein, das sich im Laufe des Krieges quer durch die ganze Armee verbreitete.
      </p>
      <h2 id="klonkrieg">Klonkriege</h2>
      <p>

        In den Klonkriegen kämpfte auf diese Weise eine aus Millionen von mandalorianischen Klonen bestehende Armee auf Seiten der Republik gegen die Droiden der Separatisten. Diese waren jedoch nicht die einzigen Mandalorianer, die an den Klonkriegen teilnahmen. Einige der Cuy’val Dar-Ausbilder, wie Kal Skirata, traten ebenfalls in den Dienst der GAR, während auf der anderen Seite ein unerwarteter Gegenspieler erschien: Der "defekte" Alpha-ARC-Klon A-02 "Spar", der es geschafft hatte, der kaminoanischen Rekonditionierung zu entkommen und zu desertieren.
      </p>
      <p>
        Aufgrund eines genetischen Defekts verfügte Spar über Erinnerungen von Jango Fett und war besessen von dem Gedanken, die Mandalorianischen Superkommandos wiederzubeleben. Er reiste nach Mandalore, wo er Freiwillige rekrutierte – darunter sogar ehemalige Mitglieder der "Death Watch" – und griff mit diesen schließlich auf Seiten der Separatisten in die Klonkriege ein. Er nannte sich Mandalore der Wiederbeleber. Seine Einheiten führten für die KUS Spezialoperationen und Blitzangriffe durch, zum Beispiel während der Zweiten Schlacht von Kamino. Der Krieg verlief für diese Mandalorianer jedoch nicht günstig: Sie wurden fast völlig zerschlagen und Alpha-02 war so traumatisiert und litt unter den widersprüchlichen Erinnerungen, dass er dem Klon-Wahnsinn verfiel und schließlich von Ailyn Vel erschossen wurde, die ihn mit ihrem Vater Boba Fett verwechselte. Vizslas Death Watch während der Klonkriege.
      </p>

      <div class="flex">
        <p>
          Unter dem Mandalorianer Pre Vizsla formierte sich während der Klonkriege eine neue Death Watch, die zunächst auf Seiten der Konföderation unabhängiger Systeme kämpfte und Mandalore erobern wollte. Ihre Mitglieder trugen das Symbol der alten Death Watch, benutzten aber Rüstungen, die sich mehr an denen der Wahren Mandalorianer orientierten. Nach dem mißglückten Versuch, republikanische Truppen nach Mandalore zu locken und die Death Watch als Befreier auftreten zu lassen, brach das Bündnis zwischen diesen und der KUS, sodass die Death Watch begann, ins All hinauszuziehen und zu plündern, wie die Death Watch Tor Vizslas vorher.
        </p>
        <img class="image" src="../assets/images/geschichte/deathwatch1.jpg" alt="deathwatch" />
      </div>

      <p>
        Nach der Umwandlung der Galaktischen Republik in das Galaktische Imperium flohen viele Klone nach Mandalore und ließen sich in der Siedlung Kyrimorut nieder.
      </p>

      <h2 id="imp">Imperiale Ära</h2>
      <div class="flex">
        <img class="image" src="../assets/images/geschichte/todessternII.jpg" alt="deathwatch" />

        <div>
          <p>
            Nach dem Krieg war der Planet Mandalore und mit ihm die Mandalorianer vollkommen verarmt. Das Imperium konfiszierte die Raumschiffwerft MandalMotors und führte die Sklaverei ein. Während die Bewohner in der Kriegsproduktion eine Chance auf wirtschaftlichen Aufschwung sahen, wurde die Sklaverei von den freiheitsliebenden Mandalorianern nicht gut geheißen und Fenn Shysa begann, die Tradition der Superkommandos erneut zu beleben und neue Truppen, vor allem Polizeikräfte, zu trainieren. Unter seinem Kommando wurde die Sklaverei auf Mandalore wieder abgeschafft, der Sitz der imperialen Verwaltung in der Knochenstadt zerstört und die Mandalorianer unter seiner Führung schlossen sich der Rebellen-Allianz an, um den Kräften von Großadmiral Miltin Takel entgegenzutreten. Auch belebte er die Tradition der Protektoren und ihren Kodex neu und wurde schließlich zum neuen Mand’alor. Allerdings konnte Shysa die Früchte seiner Arbeit nicht mehr miterleben, denn er starb auf Shogun, als er Boba Fett das Leben rettete.
          </p>
          <p>
            Gleichzeitig waren andere mandalorianische Gruppen auch für das Imperium tätig.
          </p>
        </div>
      </div>

      <h2 id="allianz">Galaktische Allianz</h2>
      <p>

        Auch nach dem Ende des Imperiums lebte die Tradition der Mandalorianischen Protektoren weiter. Sie schützten nun die Galaxis vor den Invasoren der Nagai und Tof und unterstützten die Neue Republik beim Kampf gegen Lord Shadowspawn.
      </p>
      <p>
        Mit der Invasion der Yuuzhan Vong wurden sie erneut auf eine harte Probe gestellt; unter der Führung des neuen Mand’alor Boba Fett übernahmen sie die heikle Aufgabe, eine Allianz mit den Yuuzhan Vong vorzutäuschen und für diese Invasoren Sabotageakte durchzuführen und deren Landungen auf den einzelnen Planeten der Republik vorzubereiten. Die Yuuzhan Vong versprachen ihnen im Gegenzug für die "Kooperation", den mandalorianischen Sektor zu verschonen; beiden Seiten war jedoch klar, dass dieses Versprechen über kurz oder lang gebrochen werden würde und so spielten die Mandalorianer auf Zeit.
      </p>
      <p>
        Durch diese scheinbare Zusammenarbeit machten sie sich in der ganzen Republik zu Geächteten, jedoch nahmen sie dieses in Kauf, um die Jedi insgeheim mit Informationen über die neuen Invasoren und deren Pläne versorgen zu können. Auf diese Weise leisteten sie einen entscheidenden Beitrag dazu, dass die Invasion schließlich gestoppt werden konnte, auch wenn sie dieses vollends ihren ohnehin nicht gerade guten Ruf kostete - doch das Überleben und ihre Freiheit war den Mandalorianern wichtiger als die Meinung, die man in der Galaxis von ihnen hatte. Die Yuuzhan Vong griffen schließlich allerdings auch Mandalore selbst an, um sich an den Mandalorianern für ihren Verrat zu rächen. Die Invasion konnte zurückgeschlagen werden, allerdings wurden viele Mandalorianer getötet und das Farmland von den Yuuzhan Vong vergiftet. Nach dem Ende der Yuuzhan-Vong-Invasion wurden die Mandalorianer von der Republik rehabilitiert.
      </p>

      <p>
        Etwa zehn Jahre nach dem Yuuzhan-Vong-Krieg, während des Corellia-Aufstands, wollte das Regierungsoberhaupt von Corellia, Thrackan Sal-Solo, die Mandalorianer anheuern, um auf Seiten Corellias gegen die Neue Republik zu kämpfen. Mand’alor Boba Fett rief die Mandalorianer, die in den letzten Jahren wieder verstreut gewesen waren, zusammen, allerdings folgten nur wenige seinem Ruf und auch die, die es taten, waren nicht begeistert von dem Angebot. Fett entschied sich gegen Sal-Solo, stattdessen tötete er ihn in Zusammenarbeit mit Han Solo und seiner Enkelin Mirta Gev.
      </p>

      <p>
        Einige Zeit darauf rief der Mand’alor ein Treffen der Clans auf Mandalore ein, um zu besprechen, ob sie einer Kriegspartei ihre Dienste anbieten sollten. Es wurde jedoch entschieden, dass sie sich aus dem Krieg heraushalten und sich den finanziellen Problemen Mandalores, sowie der Reinigung des von den Yuuzhan Vong vergifteten Farmlands widmen würden.
      </p>

      <p>
        Nur kurze Zeit darauf gab es auf Mandalore eine Entdeckung, die einen enormen wirtschaftlichen Aufschwung verhoffen ließ - neue Beskar-Quellen waren in Kratern, die von den Yuuzhan Vong in die Planetenoberfläche geschossen worden waren, entdeckt worden. Dieses Eisen galt nach wie vor als härtestes in der Galaxis und erzielte einen hohen Preis. Die Mandalorianer beschlossen, einen Teil davon der eigenen Bewaffnung zukommen zu lassen und einen anderen zu verkaufen.
      </p>

      <p>
        MandalMotors produzierte einen Raumjäger mit der Bezeichnung Bes’uliik - nach den Basilisken-Kriegsdroiden der alten Mandalorianer - der teilweise aus Beskar bestand und aufgrund hoch moderner Technologie sogar den X-Flügel-Jägern der Galaktischen Allianz überlegen war. Der Bes’uliik sollte an beide Seiten des Krieges verkauft werden, wobei in der Verkaufsversion einige der technologischen Verbesserungen weggelassen wurden, und der Rest wurde zur eigenen planetaren Verteidigung genutzt.
      </p>

      <p>
        Boba Fett schloss außerdem einen Handel mit den Verpinen, deren Waffen galaktische Berühmtheit genossen, um ihre eigene Technologie noch zu ergänzen. Die Verpinen waren anfangs misstrauisch doch schließlich gelang es dem Mand’alor die Verpinen zu überzeugen, dass die Mandalorianer nicht vorhatten, Roche zu erobern. Murkhana, ein weiteres wichtiges finanzielles Zentrum, gefiel dieser Pakt allerdings nicht sonderlich und schließlich bereiteten die Mandalorianer einen Angriff auf den Planeten in den Bes’uliik-Prototypen vor, an dem auch Boba Fett selbst teilnahm.
      </p>
    </div>
  </div>

  <?php
  include "templates/footer.php";
  ?>
</body>

</html>