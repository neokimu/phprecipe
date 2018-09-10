<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ボタンを使いたい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        echo '<p>結果<br>';
        echo 'ラジオボタンの値：';
        if (isset($_POST['example1'])) {
            echo h($_POST['example1']);
        }
        echo '<br>テキストボタンの値：';
        if (isset($_POST['example2'])) {
            echo h($_POST['example2']);
        }
        echo '</p><hr>';
        ?>
        <form method="post" action="input_submit.php">
            <p>ラジオボタン
                <input type="radio" name="example1" value="男">男&nbsp;
                <input type="radio" name="example1" value="女">女
            </p>
            <p>テキストボックス
                <input type="text" name="example2" size="30">
            </p>
            <input type="submit" value="送信する">&nbsp;
            <input type="reset" value="リセット"></p>
        </form>
    </body>
</html>
