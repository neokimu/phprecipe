<?php
require_once '../lib/h.php';

session_start();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>現在のセッションIDを取得する</title>
    </head>
    <body>
        <?php
        echo '<p>現在のセッションIDは「' . h(session_id()) . '」です。</p>';     
        ?>
    </body>
</html>
