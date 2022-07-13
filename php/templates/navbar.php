<?php

/**
 * generates navbar by looping over a defined array of sites and inserting them in the navbar. the current page is given the id 'active'
 */
function gen_navbar(string $file_path)
{
  $file_name_with_ext = basename($file_path);
  $file_name = explode(".", $file_name_with_ext)[0];
  $sites = array("clans", "geschichte", "timeline");
  $lvl = ".";

  if (strcmp($file_name, "index") !== 0) $lvl = "..";

  $navbar1 = "<header>
  <nav id='navbar'>
    <a class='starwars-font navbar-logo' href='$lvl/'>
      @
    </a>
    <div class='navbar-link-container'>\n";
  $navbar2 = "</div>
  </nav>
  </header>\n";

  $toplevel = ".";
  foreach ($sites as $site) {
    if (strcmp($file_name, "index") == 0) {
      $toplevel = "php";
      $file_name = "wiki";
    } else if (strcasecmp($file_name, "notfound") == 0) {
      $file_name = "404";
    }

    $file_name = __get_title($file_path);
    $id = "";
    if (strcasecmp($file_name, $site) == 0) {
      $id = "id='active'";
    }
    $siteUpper = strtoupper($site);
    $navbar1 = $navbar1 . "\t<a class='nav-link' $id href='$toplevel/$site'>\n\t\t$siteUpper\n\t</a>\n";
  }

  return $navbar1 . $navbar2 . "<span class='backtotop'>
    <a class='backtotop-anchor' href='#navbar'></a>
  </span>";
}
