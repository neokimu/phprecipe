<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>配列からラジオボタンを生成したい</title>
    </head>
    <body>
        <form method="post" action="array_to_radio.php">
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        if (isset($_POST['sex'])) {
            echo '<p>性別は：' . $_POST['sex'] . 'です。</p>';
        } 
        // 変数に配列を代入します。
        $array = array('男性', '女性');
        echo '<p>性別を選択してください：';
        foreach ($array as $value) {
            if (isset($_POST['sex']) && $value == $_POST['sex']) {
                $ckd = 'checked';
            } else {
                $ckd = '';
            }
            echo '<label>';
            echo '<input type = "radio" name = "sex" value = "' . h($value) . '"' . $ckd . '>';
            echo h($value);
            echo '</label>';
        }
        echo '</p>';
        ?>
        <p><input type="submit" value="送信する"></p>
        </form>
    </body>
</html>
