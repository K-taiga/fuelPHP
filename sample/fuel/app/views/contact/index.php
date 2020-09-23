<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    <title>お問い合わせ</title>
  </head>
  <body>
    <div id="wrap">
      <div id="head">
        <h1>お問い合わせ</h1>
      </div>

      <div id="content">
        <!-- デフォルトはpostのform -->
        <?php print(Form::open('contact/check')); ?>
        <?php print(Form::label('お名前','myname')); ?>
        <?php print(Form::input('myname')); ?>
        <?php print(Form::submit('submit','登録する')); ?>
        <?php print(Form::close()); ?>
      </div>
    </div>

    <div id="foot"></div>
  </body>
</html>
