<?php
function __get_title(string $file_path)
{
  // get *.php from file_path
  $file_name_with_ext = basename($file_path);
  // split file_name_wit_ext into 'file_name' and 'php'
  $file_name = explode(".", $file_name_with_ext)[0];

  // custom title for some pages
  if (strcmp($file_name, "index") == 0) {
    $file_name = "wiki";
  } else if (strcasecmp($file_name, "notfound") == 0) {
    $file_name = "404";
  }

  // convert filename to titlecase: 'file_name' -> 'File_name'
  $page_name = ucwords($file_name);
  return $page_name;
}
/**
 * dynamically change the current window title to the filename without extension.
 * function should be called like so in the head of a file:
 * ```
 *    <title>Mandalore -
 *      <?php
 *        include "./php/util/util.php";
 *        echo format_title(__FILE__);
 *      ?>
 *     </title>
 * ```
 * @return string formatted title, for clans.php: Clans
 */
function format_title(string $file_path)
{
  $page_name = __get_title($file_path);
  return "Mandalore - " . $page_name;
}
