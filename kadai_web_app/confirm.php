<?php
$name = $_POST['user_name'];
$age = $_POST['age'];
$busyo = $_POST['busyo'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>入力内容をご確認下さい。</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックして下さい。</p>

  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>社員名</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $age; ?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $busyo; ?></td>
    </tr>
  </table>

  <p>
    <button id="confirm-btn" onclick="location.href='complate.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</body>
</html>