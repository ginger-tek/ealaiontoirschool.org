<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <title>Eala&iacute;ont&oacute;ir School of Irish Arts - <?= @$meta['title'] ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="title" content="Eala&iacute;ont&oacute;ir School of Irish Arts - <?= @$meta['title'] ?>">
  <meta name="description" content="Welcome to the School of Irish Arts!">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="/assets/imgs/Logo_128x128.gif">
  <link rel="preload" href="/assets/fonts/kellunc.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/assets/imgs/Logo_256x256.png" as="image" type="image/png" crossorigin>
  <link rel="stylesheet" href="https://unpkg.com/@picocss/pico/css/pico.min.css" defer>
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
              <div class="display">Eala&iacute;ont&oacute;ir</div>
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
      </ul>
    </nav>
  </header>
  <main>
    <?php include $page ?>
  </main>
  <footer class="container center">
    <small>&copy; Eala&iacute;ont&oacute;ir School of Irish Arts, Inc.</small>
  </footer>
</body>

</html>