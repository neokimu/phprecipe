<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>エラーメッセージを送信したい</title>
    </head>
    <body>
        <?php
        // エラーメッセージをシステムログに記録します。
        error_log('エラーが発生しました。', 0);
        
        // エラーメッセージを設定したファイルに記録します。
        error_log("エラーが発生しました。/n", 3, '../data/output/error.log');
        error_log('エラーが発生しました。', 1, "taehyung5567@gmail.com");
        ?>
    </body>
</html>
