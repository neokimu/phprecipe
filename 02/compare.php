<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>2つの値を比較するには?</title>
    </head>
    <body>
        <?php
        // 変数に数値を代入します。
        $value1 = 10;
        $value2 = 20;
        
        if($value1 < $value2){
            echo '$value1(' . $value1 . ')は' . '$value2(' . $value2 . ')より小さい。<br>';
        }
        
        // PHP7以降で可能な比較演算子
        switch ($value1<=>$value2) {
        case -1: 
                echo 'value1 > value2';

                    break;

        case 0:
                echo 'value1 = value2';

                    break;

        case 1:
                echo 'value1 < value2';

                    break;
        }
        ?>
    </body>
</html>
