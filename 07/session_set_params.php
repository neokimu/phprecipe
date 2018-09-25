<?php
require_once '../lib/h.php';

session_set_cookie_params(0, '/', 'www.example.jp');
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>セッションCookieのパラメータを設定したい</title>
    </head>
    <body>
        <?php
        echo '<p>現在のセッションCookieの設定内容</p>';
        echo '<pre>';
        print_r(h(session_get_cookie_params()));
        echo '</pre>';
        ?>
    </body>
</html>
