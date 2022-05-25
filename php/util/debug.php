<?php

/**
 * json encodes '$text' and logs to browser console by injecting a script tag into the DOM
 * @return void
 */
function debug(mixed $text)
{
  $text = json_encode($text);
  echo "<script>console.log('$text');</script>";
}
