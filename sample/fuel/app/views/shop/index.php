<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品一覧</title>
</head>
<body>
  <ul>
  <?php foreach($raws as $row): ?>
  <li><?php print($row['item_name']); ?> / <?php print($row['price']); ?></li>
  <?php endforeach; ?>
  </ul>
</body>
</html>
