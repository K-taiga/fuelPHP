<p>お問い合わせありがとうございます</p>
<form action="/sample/check" method="post">
  <table>
    <tr>
      <th>お名前</th>
      <td><input type="text" name="myname" size="35" value=<?php print($myname);?> /></td>
    </tr>
    <tr></tr>
    <tr>
      <th></th>
      <td><input type="submit" value="登録する" /></td>
    </tr>
  </table>
</form>

<?php print(View::forge('parts/news'));?>
