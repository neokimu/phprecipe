<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cookieのデータを読み込みたい</title>
    </head>
    <body>
        <?php
        require_once '../lib/h.php';
        
        echo '<p>Cookieの中身:</p>';
        echo h($_COOKIE['php_sample']);
        
        echo '<p>parse_str()関数で分解したクッキーの中身:</p>';
        parse_str($_COOKIE['php_sample'], $output);
        echo 'data1: ' . h($output['data1']) . '<br>';
        echo 'data2: ' . h($output['data2']);
        ?>
    </body>
</html>
