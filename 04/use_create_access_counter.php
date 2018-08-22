<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ファイルを使ってアクセスカウンタを作成したい</title>
    </head>
    <body>
        <?php
        // カウンタ処理用のファイルを読み込みます。
        $pageID = 'home';
        include './create_access_counter.php';
        ?>
    </body>
</html>
