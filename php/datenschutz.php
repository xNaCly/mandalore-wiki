<!DOCTYPE html>
<html lang="en">


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
  echo generate_og_tags($title, "Datenschutzerklärung");
  ?>
</head>

<body>
  <main class="container">
    <a class="back-anchor" href="../">Zurück</a>
    <h1>Datenschutzerklärung</h1>

    In dieser Datenschutzerklärung informieren wir Sie über die Verarbeitung personenbezogener Daten bei der Nutzung dieser Website.

    <h2> Verantwortlicher </h2>

    Verantwortlich für die Datenverarbeitung ist
    <pre>Max Mustermann</pre>

    <h2> Personenbezogene Daten </h2>

    Personenbezogene Daten sind alle Informationen, die sich auf eine identifizierte oder identifizierbare natürliche Person (im Folgenden "betroffene Person") beziehen. Als identifizierbar wird eine natürliche Person angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung oder zu einem oder mehreren besonderen Merkmalen identifiziert werden kann, die Ausdruck der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen, kulturellen oder sozialen Identität dieser natürlichen Person sind.

    <h2>Daten beim Websiteaufruf</h2>

    Wenn Sie diese Website nur nutzen, um sich zu informieren und keine Daten angeben, dann verarbeiten wir nur die Daten, die zur Anzeige der Website auf dem von Ihnen verwendeten internetfähigen Gerät erforderlich sind. Das sind insbesondere:

    <dl>
      <dt>IP-Adresse</dt>
      <dt>Datum und Uhrzeit der Anfrage</dt>
      <dt>jeweils übertragene Datenmenge</dt>
      <dt>die Website, von der die Anforderung kommt</dt>
      <dt>Browsertyp und Browserversion</dt>
      <dt>Betriebssystem</dt>
      <dd>All diese werden vom Hosting Server immer gelogt.</dd>
    </dl>

    Rechtsgrundlage für die Verarbeitung dieser Daten sind berechtigte Interessen gemäß Art. 6 Abs. 1 UAbs. 1 Buchstabe f) DSGVO, um die Darstellung der Website grundsätzlich zu ermöglichen.

    Darüber hinaus können Sie verschiedene Leistungen auf der Website nutzen, bei der weitere personenbezogene und nicht personenbezogene Daten verarbeitet werden.

    <h2>Ihre Rechte</h2>

    Als betroffene Person haben Sie folgende Rechte:

    <ul>
      <li>Sie haben ein Auskunftsrecht bezüglich der Sie betreffenden personenbezogenen Daten, die der Verantwortliche verarbeitet (Art. 15 DSGVO),</li>
      <li>Sie haben das Recht auf Berichtigung der Sie betreffenden Daten, wenn diese unrichtig oder unvollständig gespeichert werden (Art. 16 DSGVO),</li>
      <li>Sie haben das Recht auf Löschung (Art. 17 DSGVO),</li>
      <li>Sie haben das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen (Art. 18 DSGVO),</li>
      <li>Sie haben das Recht auf Datenübertragbarkeit (Art. 20 DSGVO),</li>
      <li>Sie haben ein Widerspruchsrecht gegen die Verarbeitung Sie betreffender personenbezogener Daten (Art. 21 DSGVO),</li>
      <li>Sie haben das Recht nicht einer ausschließlich auf einer automatisierten Verarbeitung – einschließlich Profiling – beruhenden Entscheidung unterworfen zu werden, die Ihnen gegenüber rechtliche Wirkung entfaltet oder sie in ähnlicher Weise erheblich beeinträchtigt (Art. 22 DSGVO),</li>
      <li>Sie haben das Recht, sich bei einem vermuteten Verstoß gegen das Datenschutzrecht bei der zuständigen Aufsichtsbehörde zu beschweren (Art. 77 DSGVO). Zuständig ist die Aufsichtsbehörde an Ihrem üblichen Aufenthaltsort, Arbeitsplatz oder am Ort des vermuteten Verstoßes.</li>
    </ul>
  </main>
</body>

<html>