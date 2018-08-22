<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>繰り返し処理の途中でスキップしたい</title>
    </head>
    <body>
        <?php
        // 変数に数値を代入します。
        $count1 = 0;
        $sum = 0;
        
        // 繰り返し処理を行ないます。
        // 階層数 = 2
        while ($count1 < 10) { // continueが実行されたときに処理が移る位置
            $count1 += 1;
            $count2 = 0;
            echo 'count1=' . $count1 . ' ';
            // 階層数 = 1(default)
            while ($count2 < 10) {
                $count2 += 1;
                echo 'count2=' . $count2 . ' ';
                echo 'count1*count2=' . $count1 * $count2 . '<br>';
                if($count1 * $count2 > 30){
                    continue 2; // continue 数は繰り替えし処理を抜けて戻る階層数を意味
                }
                $sum += $count1 * $count2;
            }
        }
        
        // 合計を表示します。
        echo '合計は' . $sum;
        
        for( $i=0;$i<5;$i++ ){
            for( $j=0;$j<5;$j++ ){
                if( $i===3 ){
                  echo "ループをスキップ<br>";
                  continue 2;
                }
                echo $i . $j . "<br>";
            }
        }

        ?>
    </body>
</html>
