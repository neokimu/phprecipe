<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>文字数や桁数をチェックしたい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            
            echo '<p>ctype_digit()関数:</p>';
            if(ctype_digit($number)){
                echo '<p>「' . h($number) . '」は数字です。</p>';
            } else {
                echo '<p>「' . h($number) . '」は数字ではありません。</p>';
            }
            
            echo '<p>is_numeric()関数:</p>';
            if(is_numeric($number)){
                echo '<p>「' . h($number) . '」は数字です。</p>';
            } else {
                echo '<p>「' . h($number) . '」は数字ではありません。</p>';
            }
        }        
        ?>
        <form method="post" action="form_ctype_digit.php">
            <p>数字を入力してください</p>
            <input type="text" name="number" value="">
            <input type="submit" value="送信">           
        </form>
    </body>
</html>
