<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎　課題016</title>
</head>
<body>
  <p>
    <?php
      // クラス定義（Food）
      class Food {
        // プロパティ定義
        private $name;
        private $price;

        // メソッド（「price」プロパティの値を出力）
        public function show_price() {
          echo $this->price . '<br>';
        }

        // コンストラクタ
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
      }

      // クラス定義（Animal）
      class Animal {
        private $name;
        private $height;
        private $weight;

        // メソッド（「height」 プロパティの値を出力）
        public function show_height() {
          echo $this->height . '<br>';
        }

        // コンストラクタ
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

      // インスタンス化（Food）
      $food = new Food('potato', 250);

      // foodオブジェクトの値を出力
      print_r($food);
      echo '<br>';

      // インスタンス化（Animal）
      $animal = new Animal('dog', 60, 5000);

      // animalオブジェクトの値を出力
      print_r($animal);
      echo '<br>';

      // foodオブジェクトのshow_priceメソッドを実行
      $food->show_price();

      // animalオブジェクトのshow_heightメソッドを実行
      $animal->show_height();
     ?>
  </p>  
</body>
</html>