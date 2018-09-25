<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>処理を一時停止したい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        echo '<p>現在の時刻: ' . h(date('h:i:s')) . '</p>';
        
        // 10秒間一時停止します。
        sleep(10);
        
        echo '<p>sleep()関数で10秒間停止後の時刻: ' . h(date('h:i:s')) . '</p>';
        ?>
    </body>
</html>
