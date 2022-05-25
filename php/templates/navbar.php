<?php
include "../util/util.php";

function gen_navbar(string $file_path)
{
  $navbar1 = "<nav id='navbar'><a class='starwars-font navbar-logo' href='/'>@</a><div class='navbar-link-container'>";
  $navbar2 = "</div></nav>";
  $sites = array("clans", "history");

  foreach ($sites as $site) {
    $file_name = format_title($file_path);
    $id = "";
    if (strcasecmp($file_name, $site) == 0) {
      $id = "id='active'";
    }
    $siteUpper = strtoupper($site);
    $navbar1 = $navbar1 . "<a class='nav-link' $id href='/$site'>$siteUpper</a>";
  }

  return $navbar1 . $navbar2;
}
