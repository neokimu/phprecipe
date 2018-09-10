<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>データ入力時のデータを処理するには？</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        $example = isset($_POST['example']) ? $_POST['example'] : null;
        if (strlen($example) > 0) {
            echo '<p>データを受け取りました: ' . h($example) . '</p>';
        } else {
            echo '<p>データを受け取っていません</p>';
        }
        echo '</p><hr>';
        ?>
        <form method="post" action="form_strlen.php">
            <p>テキストボックス</p>
            <input type="text" name="example" value="<?=h($example)?>">
            <input type="submit" value="送信">
        </form>
    </body>
</html>
