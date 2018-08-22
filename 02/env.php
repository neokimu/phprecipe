<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>環境変数の情報</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        $agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        $ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        
        echo 'ブラウザ: ' . h($agent) . '<br>';
        echo 'IPアドレス: ' . h($ip) . '<br>';
        echo '参照元: ' . h($ref) . '<br>';
        
        echo '<pre>';
        var_dump(h($_SERVER));
        echo '</pre>';
        ?>
    </body>
</html>
