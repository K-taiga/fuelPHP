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
        <form action="/shop/save" method="post">
          <table>
            <tr>
              <th>商品名</th>
              <td><input type="text" name="item_name" size="35" /></td>
            </tr>
            <tr>
              <th>値段</th>
              <td><input type="text" name="price" size="10" /></td>
            </tr>
            <tr>
              <th></th>
              <td><input type="submit" value="登録する" /></td>
            </tr>
          </table>
        </form>
      </div>
    </div>

    <div id="foot"></div>
  </body>
</html>
