<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>他のフィイルを取り込んで利用</title>
    </head>
    <body>
        <?php
        // site_data.phpを取り込んで利用します。
        // include_once 'site_data.php';
        require_once 'site_data.php';
        
        echo 'サイト名前: ' . $site . '<br>';
        echo '管理者名前: ' . $admin . '<br>';
        echo 'メールアドレス: ' . $email . '<br>';
        
        ?>
    </body>
</html>
