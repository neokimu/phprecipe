<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>serialize()</title>
    </head>
    <body>
        <?php
        // MyClassクラスを定義したファイルを読み込みます。
        require_once '../lib/MyClass.php';
        $fileName = '../data/output/serialized_object';
        
        $obj = new MyClass;
        $obj->value = 'シリアライズと展開';
        
        // オブジェクトをシリアライズして文字化します。
        $serialized = serialize($obj);
        
        // シリアライズした文字列をファイルに保存します。
        file_put_contents($fileName, $serialized);
        
        echo '<p>オブジェクトをシリアライズし、ファイルに保存しました。</p>';
        echo '<p>保存した文字列の内容：' . h($serialized) . '</p>';
        
        function h($string)
        {
            return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        }
        ?>
        <a href="./unserialize.php">unserialize()した結果を確認する</a>
    </body>
</html>
