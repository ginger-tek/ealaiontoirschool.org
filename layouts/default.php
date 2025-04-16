<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <title>Ealaíontóir School of Irish Arts - <?= @$meta['title'] ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="title" content="Ealaíontóir School of Irish Arts - <?= @$meta['title'] ?>">
  <meta name="description" content="Welcome to the Ealaíontóir School of Irish Arts!">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="/assets/imgs/Logo_128x128.gif">
  <link rel="preload" href="/assets/fonts/catwalzhari-webfont.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" defer>
  <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
  <header class="container-fluid">
    <nav class="container">
      <ul>
        <li>
          <a href="/" class="brand">
            <img src="/assets/imgs/Logo_256x256.png" style="width:3em;height:3em" alt="Logo">
            <div>
              <div class="display">Ealaíontóir</div>
              <div style="margin-top:-.25em">School of Irish Arts</div>
            </div>
          </a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="/about">About</a>
        </li>
        <li>
          <a href="/contact">Contact</a>
        </li>
        <li>
          <a href="/donate">Donate</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <?php include $page ?>
  </main>
  <footer class="container center">
    <small>&copy; Ealaíontóir School of Irish Arts, Inc. | <a href="/about">About</a> - <a href="/contact">Contact</a> - <a href="/donate">Donate</a></small>
  </footer>
</body>

</html>