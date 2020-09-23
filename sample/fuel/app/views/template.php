<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    <title><?php print($title);?></title>

    <!-- ファイル名にタイムスタンプをつけてキャッシュが残らないようにできる -->
    <!-- <?php print(Asset::js('base.js'));?> -->
    <!-- 他にもAsset::img,Asset::cssのように読み込める -->
  </head>
  <body>
    <div id="wrap">
      <div id="head">
        <h1><?php print($title);?></h1>
      </div>

      <div id="content">
        <?php print($content);?>
      </div>
    </div>

    <div id="foot"></div>
  </body>
</html>
