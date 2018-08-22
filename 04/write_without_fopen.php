<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>fopen()関数を使わずにファイルにデータを書き込みたい</title>
    </head>
    <body>
        <?php
        // ファイル名を設定したい
        $fileName = __DIR__ . '/../data/output/file_put_contents.txt';
        
        // 書き込む文字列
        $string = 'fopen()関数を使わずにファイルにデータを書き込みたい' . "\n";
        
        // データを書き込みます（ファイルがある場合は追記）
        file_put_contents($fileName, $string, LOCK_EX | FILE_APPEND);
        echo $fileName  . 'に以下を書き込みした<br>';
        echo '「' . $string . '」';
        ?>
    </body>
</html>
