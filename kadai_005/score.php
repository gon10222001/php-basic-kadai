<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題005</title>
</head>
<body>
  <p>
    <?php
      // 点数
      $score1  = 80;
      $score2  = 60;
      $score3  = 55;
      $score4  = 40;
      $score5  = 100;
      $score6  = 25;
      $score7  = 80;
      $score8  = 95;
      $score9  = 30;
      $score10 = 60;

      // 合計点の算出
      $ttl = $score1
           + $score2
           + $score3
           + $score4
           + $score5
           + $score6
           + $score7
           + $score8
           + $score9
           + $score10;
           
      // 平均点の算出
      $ave = $ttl / 10;

      // 結果の表示
      echo $ave;
    ?>
  </p>
</body>
</html>