<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>関数の引数に付いた&って何ですか?</title>
    </head>
    <body>
        <?php
        // 引数が参照渡しの関数を定義します。
        function breakfast(&$drink) {
            $drink = 'アイスコーヒー';
        }
        
        // 変数に文字列を代入し、そのまま表示します。
        $string = 'ホットコーヒー';
        echo '関数実行前の$string: ' . $string . '<br>';
        
        // 変数を引数にして関数を実行します。
        breakfast($string);
        //  関数実行後の関数を表示します。
        echo '関数実行後の$string: ' . $string . '<br>';
        
        //関数を定義
        function int_double ( &$int ) {
                $int *= $int;
        }
        //関数外部で変数を作成
        $i = 5;
        //関数呼び出し
        int_double( $i );
        //関数が変数の値を操作
        echo $i;
        ?>
    </body>
</html>
