<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ファイル名入力ボックスを使いたい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        echo '<p>結果<br>';
        echo 'ファイル名入力ボックス';
        echo '<pre>';
        if (isset($_FILES['example1'])) {
            echo print_r(h($_FILES['example1']));
        }
        echo '</pre>';
        echo 'ファイル名入力ボックス(size属性に50)';
        echo '<pre>';
        if (isset($_FILES['example2'])) {
            echo print_r(h($_FILES['example2']));
        }
        echo '</pre>';
        echo 'ファイル名入力ボックス(disabledでボックスを無効化する)';
        echo '<pre>';
        if (isset($_FILES['example3'])) {
            echo print_r(h($_FILES['example3']));
        }
        echo '</pre></p><hr>';
        ?>
        <form method="post" action="input_file.php" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <p>ファイル名入力ボックス
                <input type="file" name="example1"></p>
            <p>ファイル名入力ボックス(size属性に50)
                <input type="file" name="example2" size="50"></p>
            <p>ファイル名入力ボックス(disabledでボックスを無効化する)
                <input type="file" name="example3" disabled></p>
            <p><input type="submit" value="送信する"></p>
        </form>
    </body>
</html>
