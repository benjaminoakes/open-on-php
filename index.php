<!DOCTYPE html>
<? require_once 'config.php' ?>
<html>
  <head>
    <title>Open On...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <ul>
      <li>Bookmarklet: <a href="javascript:(function(){var%20i=document.createElement("img");i.src='https://<?= $open_on_hostname ?>/store.php?secret=<?= $open_on_secret ?>url='+document.location.href;}());">Open on Device</a></li>
      <li>Bookmark: <a href="https://<?= $open_on_hostname ?>/redirect.php?secret=<?= $open_on_secret ?>">Open from Device</a></li>
    </ul>
  </body>
</html>
