<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ファイルが書き込み可能か調べたい</title>
    </head>
    <body>
        <?php
        // ファイル名を設定します。
        $fileName = '../data/output/is-writable.txt';
        
        // ファイルが書き込み可能か調べます。
        if (is_writable($fileName)) {
            echo "<p>$fileName は書き込み可能なファイルです。</p>";
        } else {
            echo "<p>$fileName は書き込みできないファイルか、または存在しません。</p>";
        }
        ?>
    </body>
</html>
