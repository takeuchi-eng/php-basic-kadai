<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <p>
        <?php
        // Foodクラス定義
        class Food {
            // プロパティ定義
            private $name;
            private $price;

            // メソッド定義
            public function show_price(){
                echo $this->price . '<br>';
            }

            // コンストラクタ定義
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }

        //Animalクラス定義
        class Animal{
            // プロパティ定義
            private $name;
            private $height;
            private $weight;

            // メソッド定義
            public function show_height(){
                echo $this->height .'<br>';
            }

            // コンストラクタ定義
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化
        $food = new Food('potato',250);

        // インスタンス$foodの各プロパティの値を出力
        print_r($food);
        echo '<br>';

        // インスタンス化
        $animal = new Animal('dog',60,5000);

        // インスタンス$animalの各プロパティの値を出力
        print_r($animal);
        echo '<br>';

        // show_price()の呼び出し
        $food->show_price();

        // show_heightの呼び出し
        $animal->show_height();
        ?>
    </p>
</body>

</html>