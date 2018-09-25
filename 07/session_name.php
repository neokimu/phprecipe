<?php
require_once '../lib/h.php';

$oldSessionName = session_name('SHOEISHA');
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>セッション名を取得/設定したい</title>
    </head>
    <body>
        <?php
        echo '<p>標準のセッション名は、' . h($oldSessionName) . 'です。</p>';   
        echo '<p>独自のセッション名は、' . h(session_name()) . 'です。</p>';   
        ?>
    </body>
</html>
