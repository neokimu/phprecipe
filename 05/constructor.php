<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>コンストラクタ</title>
    </head>
    <body>
        <?php
        // コンストラクタを持ったクラスを定義します。
        class MyClass
        {
            public function __construct($arg) {
                echo 'コンストラクタ: ' . h($arg);
            }
        }
        
        function h($string) 
        {
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }
        
        $obj = new MyClass('テスト');
        ?>
    </body>
</html>
