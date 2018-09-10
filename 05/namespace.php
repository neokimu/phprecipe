<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>名前空間を使用する</title>
    </head>
    <body>
        <?php
        require_once '../lib/MyNamespace/NSClass.php';
        require_once '../lib/MyNamespace/SubNamespace/NSClass.php';
        require_once '../lib/h.php';
        
        const STABLE_DATA = 'グローバル空間の定数';
        
        class NSClass
        {
            public static function show() {
                return 'グローバル空間の NSClass の show() メソッド';
            }
        }
        
        echo '<p>';
        echo h(STABLE_DATA) . '<br>';
        echo h(MyNamespace\STABLE_DATA) . '<br>';
        echo h(MyNamespace\SubNamespace\STABLE_DATA) . '<br>';
        echo '</p>';
        
        echo '<p>';
        echo h(NSClass::show()) . '<br>';
        echo h(MyNamespace\NSClass::show()) . '<br>';
        echo h(MyNamespace\SubNamespace\NSClass::show()) . '<br>';
        echo '</p>';
        ?>
    </body>
</html>
