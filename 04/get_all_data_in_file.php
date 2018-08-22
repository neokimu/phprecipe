<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ファイルのデータをまとめて取得したい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        // ファイル名を設定します。
        $fileName = '../data/get_all_data_in_file-data.txt';
        
        // ファイルの存在を確認します。
        if (!is_file($fileName)) {
            die('ファイルが存在しません。');
        }
        
        // file_get_contents()関数でデータを取得します。
        $fileData1 = file_get_contents($fileName);
        
        // データを出力します。
        echo '<p>file_get_contents()関数でデータを取得</p>';
        
        var_dump($fileData1);
        
        // file()関数でデータを取得します。
        $fileData2 = file($fileName);
        
        // データを出力します。
        echo '<p>file()関数でデータを取得</p>';
        var_dump($fileData2);
        ?>
    </body>
</html>
