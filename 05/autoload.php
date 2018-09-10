<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>spl_autoload_register()関数によるオートロード</title>
    </head>
    <body>
        <?php
        // オートロードの設定を読み込みます。
        require '../lib/autoload.php';
        
        echo 'FileInfoクラスをインスタンス化します；';
        $obj = new FileInfo();
        $obj->readFile(__FILE__);
        echo '<br>getRetCode()メソッドを呼びます：';
        echo $obj->getRetCode();
        echo '<br>';
        echo 'Counter::current()を呼びます：';
        echo Counter::current();
        ?>
    </body>
</html>
