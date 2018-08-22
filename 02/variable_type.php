<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>変数の型を調べる</title>
    </head>
    <body>
        <?php
        // 変数に数字を代入します。
        $a = 123;
        // 変数に文字列を代入します。
        $b = '321';
        
        echo '$a の型: '. gettype($a).'<br>';
        echo '$b の型: '. gettype($b).'<br>';
        
        // is_int()関数は整数型かどうかをかえします。
        if(is_int($a)){
            echo '$a は　integer です<br>';
        } else {
            echo '$a は　integer ではありません<br>';
        }
        
        // is_string()関数は文字型かどうかを返します。
        if(is_string($b)){
            echo '$b は　string です<br>';
        } else {
            echo '$b は　string ではありません<br>';
        }
        
        // var_dump()関数でも型が分かります。
        echo '<pre>';
        var_dump($a);
        var_dump($b);
        echo '</pre>';
        ?>
    </body>
</html>
