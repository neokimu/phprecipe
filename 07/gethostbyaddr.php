<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ホスト名やIPアドレスを取得したい</title>
    </head>
    <body>
        <?php
        require_once '../lib/h.php';
        
        $ipaddress = '192.168.0.19';
        $hostname = gethostbyaddr($ipaddress);
        echo '<p>' . h($ipaddress) . ' -> ' . h($hostname) . '</p>';
        
        echo '<p>' . h($hostname) . ' -> ' . h(gethostbyname($hostname)) . '</p>';
        ?>
    </body>
</html>
