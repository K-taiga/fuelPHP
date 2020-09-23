<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    <title>商品登録</title>
  </head>
  <body>
    <div id="wrap">
      <div id="head">
        <h1>商品登録</h1>
      </div>

      <div id="content">
        <ul>
          <?php foreach ($rows as $r): ?>
            <li><?php print($r['item_name']);?>/<?php print($r['price']);?></li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>

    <div id="foot"></div>
  </body>
</html>
