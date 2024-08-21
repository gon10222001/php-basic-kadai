<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題011</title>
</head>
<body>
  <p>
    <?php
      // 連想配列のセット
      $items = ['名前' => '玉ねぎ', '値段' => 200, '産地  ' => '北海道' ];

      // 連想配列の内容を出力
      foreach ($items as $key => $value ) {
        echo "{$key} : {$value}<br>";
      }
    ?>
  </P>
</body>
</html>