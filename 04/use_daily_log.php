<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>日別のログファイルを作成したい</title>
    </head>
    <body>
        <?php
        // ログファイルを作成するプログラマを読み込みます。
        include './daily_log.php';
        
        echo '以下をログファイルに記録しました。<br>';
        echo$log;
        ?>
    </body>
</html>
