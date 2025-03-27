<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>foreach分を使って連想配列の値とキーを出力しよう</title>
</head>

<body>
    <p>
       <?php
        $food_data = ['名前' => '玉ねぎ', '値段' => '200', ' 産地' => '北海道'];

        foreach($food_data as $key => $value){
            echo "{$key}:{$value}<br>";
        }
       ?>
   </p>
</body>

</html>