<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 昇順 降順ソート関数
        function sort_2way($array,$order) {
          if($order) {
            echo '昇順にソートします。<br>';
            sort($array); // 昇順にソート
          } else {
            echo '降順にソートします。<br>';
            rsort($array); // 降順にソート
          }

          // ソートされた配列を表示
          foreach ($array as $num) {
            echo $num . '<br>';
          }
        }

        $nums = [15, 4, 18, 23, 10];

        // 関数の呼び出し
        sort_2way($nums, true); // 昇順でソートを呼び出し
        echo '<br>';
        sort_2way($nums, false); // 降順でソート呼び出し
        ?>
    </p>
</body>

</html>
