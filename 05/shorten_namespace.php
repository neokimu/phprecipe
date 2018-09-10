<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>名前空間の記述を短くする</title>
    </head>
    <body>
        <?php
        require_once '../lib/MyNamespace/NSClass.php';
        require_once '../lib/MyNamespace/SubNamespace/NSClass.php';
        require_once '../lib/h.php';
        
        class ShortenNSClass 
        {
            public static function show() {
                return 'グローバル空間の ShortenNSClass の show() メソッド';
            }
        }
        
        use MyNamespace\SubNamespace as SubNS;
        use MyNamespace\NSClass as NSClassInMyNS;
        use MyNamespace\SubNamespace\NSClass;
        use ShortenNSClass as GlobalNSClass;
        
        echo '<p>';
        echo h(SubNS\NSClass::show()) . '<br>';
        echo h(NSClassInMyNS::show()) . '<br>';
        echo h(NSClass::show()) . '<br>';
        echo h(GlobalNSClass::show()) . '<br>';
        echo '</p>';
        ?>
    </body>
</html>
