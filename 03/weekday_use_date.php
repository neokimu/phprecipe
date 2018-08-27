<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>指定した日付の曜日を求めたい</title>
    </head>
    <body>
        <?php
        $timestamp = mktime(0, 0, 0, 10, 1, 2013);
        $wday = (int) date('w', $timestamp);
        $weekdaylabel = ['日','月','火','水','木','金','土'];
        
        echo '<p>日付: ' . date('Y/m/d', $timestamp) . '</p>';
        echo '<p>結果: ' . $wday ."（$weekdaylabel[$wday]）". '</p>';
        ?>
    </body>
</html>
