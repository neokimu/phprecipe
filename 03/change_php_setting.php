<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHPの設定を一時的に変更したい</title>
    </head>
    <body>
        <?php
        echo '<p>設定変更前のinclude_path値: </p>';
        echo '<p>' . ini_get('include_path') . '<p>';
        
        $path = '.:/Applications/MAMP/bin/php/php5.4.10/lib/php';
        ini_set('include_path', $path);
        
        echo '<p>設定変更後のinclude_path値: </p>';
        echo '<p>' . ini_get('include_path') . '<p>';
        ?>
    </body>
</html>
