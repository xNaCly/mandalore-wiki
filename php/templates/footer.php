<?php
function gen_footer(string $file_path)
{
  $level = "..";
  $file_name_with_ext = basename($file_path);
  $file_name = explode(".", $file_name_with_ext)[0];

  if (strcmp($file_name, "index") === 0) $level = ".";

  return "<footer>
<div class='footer-left'>
  <h2>Mandalorian Wiki</h2>
</div>
<aside>
  <div>
    <h4>Infos</h4>
    <a href='$level/php/mehr.php'>Mehr Mando</a>
    <a href='$level/php/namegen.php'>Mandonamen</a>
    <a href='https://github.com/xNaCly/webengineering-project'>Github</a>
  </div>
  <div>
    <h4>Rechtliches</h4>
    <a href='$level/php/datenschutz.php'>Datenschutzerklärung</a>
    <a href='$level/php/impressum.php'>Impressum</a>
    <a href='$level/php/kontakt.php'>Kontakt</a>
  </div>
</aside>
</footer>";
}
