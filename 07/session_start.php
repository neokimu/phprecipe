<?php
require_once '../lib/h.php';

session_start();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>セッションを使いたい</title>
    </head>
    <body>
        <?php
        if (! isset($_SESSION['count'])) {
        // 初めてのアクセス
            $_SESSION['count'] = 1;
        } else {
            $_SESSION['count']++;
        }
        echo '君のアクセス回数：' . h($_SESSION['count']);    
        ?>
    </body>
</html>
