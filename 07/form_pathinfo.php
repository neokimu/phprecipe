<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ファイルの拡張子をチェックしたい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        if (isset($_FILES['example']['name']) && $_FILES['example']['name'] != '') {
            $localFilename = basename($_FILES['example']['name']);
            $pathinfo = pathinfo($localFilename);
            if(isset($pathinfo['extension'])) {
                echo '<p>「' . h($localFilename) . '」の拡張子: ';
                echo h($pathinfo['extension']) . '</p>';
            } else {
                echo '<p>「' . h($localFilename) . '」の拡張子はありません';
            }                
        }
        ?>
        <form method="post" action="form_pathinfo.php" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <input type="file" name="example">
            <input type="submit" value="送信する">
        </form>
    </body>
</html>
