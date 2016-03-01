<!DOCTYPE html>
<? require_once 'config.php' ?>
<html>
  <head>
    <title>Open on...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1>Open on...</h1>

    <p>Share a URL to any device with a web browser.</p>

    <?php if ($_GET['secret'] === $open_on_secret) { ?>
      <ul>
        <li>Bookmarklet: <a href="javascript:(function(){var%20i=document.createElement("img");i.src='https://<?= $open_on_hostname ?>/store.php?secret=<?= $open_on_secret ?>&url='+document.location.href;}());">Open on Device</a></li>
        <li>Bookmark: <a href="https://<?= $open_on_hostname ?>/redirect.php?secret=<?= $open_on_secret ?>">Open from Device</a></li>
      </ul>
    <?php } else { ?>
      Invalid secret.
    <?php } ?>
  </body>
</html>
