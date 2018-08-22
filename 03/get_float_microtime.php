<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ベンチマークを取得したい(2)</title>
    </head>
    <body>
        <?php
        // 処理開始前のタイムスタンプをfloat値で取得します。
        $start = microtime(TRUE);
        // 計測対象の処理（sha1()関数を1000回実行）
        for ($i = 0; $i < 1000; $i++) {
          sha1($i);
        }
        
        // 処理終了後のタイムスタンプをfloat値で取得します。
        $end = microtime(TRUE);
        $time = $end - $start;
        echo '<p>'. $time * 1000 .'[msec]</p>';
        ?>
    </body>
</html>
