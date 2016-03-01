<?php

require_once 'config.php';

if ($_GET['secret'] === $open_on_secret) {
  $lines = file('url.txt');
  $url = $lines[0];

  header('Location: ' . $url);
}
