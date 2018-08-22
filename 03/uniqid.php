<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ユニークなIDを作成したい</title>
    </head>
    <body>
        <?php
        echo uniqid() . '<br>';
        echo uniqid('test_') . '<br>';
        echo uniqid('test_') . '<br>';
        echo uniqid('', TRUE) . '<br>';
        echo uniqid('', TRUE) . '<br>';
        echo uniqid('test_', TRUE) . '<br>';
        echo uniqid('test_', TRUE) . '<br>';
        echo md5(uniqid(mt_rand(), true)) . '<br>';
        echo md5(uniqid(mt_rand(), true)) . '<br>';
        ?>
    </body>
</html>
