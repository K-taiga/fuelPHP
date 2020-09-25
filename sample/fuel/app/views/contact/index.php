<!-- デフォルトはpostのform -->
<?php print(Form::open('contact/index'));?>
<table>
  <tr>
    <th><?php print(Form::label('お名前', 'myname'));?></th>
    <td>
      <?php print(Form::input('myname'));?>
      <?php if ($val->error('myname')): ?>
      <p class="error"><?php print($val->error('myname'));?></p>
      <?php endif;?>
    </td>
  </tr>
  <tr>
    <th><?php print(Form::label('メールアドレス', 'email'));?></th>
    <td>
      <?php print(Form::input('email'));?>
      <?php if ($val->error('email')): ?>
      <p class="error"><?php print($val->error('email'));?></p>
      <?php endif;?>
    </td>
  </tr>
  <tr>
    <th><?php print(Form::label('性別', 'gender'));?></th>
    <!-- form_が接頭辞でつく -->
    <td>
      <?php print(Form::radio('gender', '男性', array('id' =>
    'form_gender_male')));?>
      <!-- 自動でform_がついてform_gender_maleになる -->
      <?php print(Form::label('男性', 'gender_male'));?>
      <?php print(Form::radio('gender', '女性', array('id' =>
    'form_gender_female', 'checked')));?><?php print(Form::label('女性', 'gender_female'));?>
    </td>
  </tr>
  <tr>
    <th></th>
    <td>
      <?php print(Form::submit('submit', '登録する'));?>
    </td>
  </tr>
</table>

<?php print(Form::close());?>