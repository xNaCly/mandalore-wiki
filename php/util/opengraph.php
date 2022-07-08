<?php
function generate_og_tags(string $title, string $desc)
{
  $host = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  echo "
  <meta property='og:title' content='$title' />
  <meta property='og:type' content='article' />
  <meta property='og:url' content='$host' />
  <meta property='og:description' content='$desc' />
  <meta property='og:color' content='#fff' />
";
}
