<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    <title>ビューへの値の受け渡し</title>
  </head>
  <body>
    <div id="wrap">
      <div id="head">
      </div>

      <div id="content">
      <!-- <?php if (isset($name)): ?>
      <p>あなたの名前は「<?php print($name);?>」はですね</p>
      </div>
      <?php endif;?> -->

      <p><?php print($html);?></p>
      <p><?php print($danger);?></p>
    </div>

    <div id="foot"></div>
  </body>
</html>
