<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>複数選択可能なセレクトメニューチェックボックスの値を受け取りたい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        if (isset($_POST['sample1'])){
            foreach ($_POST['sample1'] as $value) {
                echo 'セレクトボックスの値は: ' . h($value) . 'です<br>';
            };
        }
        if (isset($_POST['sample2'])){
            foreach ($_POST['sample2'] as $value) {
                echo 'チェックボックスの値は: ' . h($value) . 'です<br>';
            };
        }
        echo '</p><hr>';
        ?>
        <form method="post" action="multi_select.php">
            <p>セレクトメニュー</p>
            <select name="sample1[]" size="5" multiple>
            <option value="サンプル1">サンプル1</option>
            <option value="サンプル2">サンプル2</option>
            <option value="サンプル3">サンプル3</option>
            </select>
            <p>チェックボックス</p>
            <input type="checkbox" name="sample2[]" value="その1">その1
            <input type="checkbox" name="sample2[]" value="その2">その2
            <input type="checkbox" name="sample2[]" value="その3">その3
            <br>
            <input type="submit" value="送信する">
        </form>
    </body>
</html>
