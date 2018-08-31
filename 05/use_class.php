<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FileInfoクラスを利用する</title>
    </head>
    <body>
        <?php
        // FileInfoクラスの定義されたFileInfo.phpを読み込みます。
        require_once '../lib/FileInfo.php';
        require_once '../lib/h.php';
        
        $fileInfo = new FileInfo();
        $fileInfo->readFile('use_class.php');
        echo '改行コードは「' . h($fileInfo->getRetCode()) . '」です。';
        
        ?>
    </body>
</html>
