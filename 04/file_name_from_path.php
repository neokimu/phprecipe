<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>パス名からファイル名を取得したい</title>
    </head>
    <body>
        <?php
        // ロケールを設定します。 
        setlocale(LC_ALL, 'ja_JP.UTF-8');
        
        // パスを含むファイル名を設定します。
        $pathName = './test/path/name/pathinfo.txt'; // 存在しないファイル/パス
        echo "<p>パス名: $pathName</p>";
        
        if(!file_exists($pathName)){
            die('ファイルが存在しません。');
        }
        
        // pathinfo()関数でファイル名を取得、表示します。
        $pathinfo = pathinfo($pathName);
        echo '<p>pathinfo()関数でファイル名を取得する<br>';
        echo 'ファイル名: ' . $pathinfo['basename'] . '</p>';
        
        // basename()関数でファイル名を取得、表示します
        echo '<p>basename()関数でファイル名を取得する<br>';
        echo 'ファイル名: ' . basename($pathName) . '</p>';
        ?>
    </body>
</html>
