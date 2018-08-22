<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>静的関数</title>
    </head>
    <body>
        <?php
        function counter() {
        // $countは静的変数です。最初にこの関数が呼ばれたときにのみ最初化されます。
            static $count = 0;
            
            return ++$count;
        }
        
        echo counter() .'<br>';
        echo counter() .'<br>';
        echo counter() .'<br>';
        ?>
    </body>
</html>
