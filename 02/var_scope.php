<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>変数のスコープ</title>
    </head>
    <body>
        <?php
        // 変数$aはグローバルの変数になります。
        $a = 'グローバル$a';
        // 変数$bもグローバル変数です。
        $b = 'グローバル$b';
        
        function test() {
            // こちらの変数$aは、この関数内でのみ有効なローカルスコープの変数です。
            // グローバル変数$aとは別の変数になります。
            $a = 'ローカル$a';
            echo $a . '<br>';
            
            global $b;
            echo $b . '<br>';
        }
        
        test();
        echo $a . '<br>';
        echo $b;
        ?>
    </body>
</html>
