<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            // 関数定義
            function sort_2way($array, $order){
                if($order == true){
                    echo '昇順にソートします。<br>';

                    sort($array);

                    // 昇順のループ
                    foreach($array as $sum){
                        echo $sum.'<br>';
                    }

                }else{
                    echo '降順にソートします。<br>';

                    rsort($array);

                    // 降順のループ
                    foreach($array as $sum){
                        echo $sum.'<br>';
                    }
                }

            }
            // ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];

            // 関数の呼び出し
            sort_2way($nums, TRUE);
            sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>