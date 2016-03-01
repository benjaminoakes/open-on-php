<?php

require_once 'config.php';

if ($_GET['secret'] === $open_on_secret) {
  $url = $_GET['url'];
  file_put_contents('url.txt', $url);
}
