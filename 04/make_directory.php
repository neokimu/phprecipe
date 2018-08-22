<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ディレクトリを作成したい</title>
    </head>
    <body>
        <?php
        // 作成するディレクとリ名を設定します。
        $dir = '../data/output/madeDir';
        
        // ディレクとリの存在を確認します。
        if (is_dir($dir)) {
            echo "<p>ディレクとリ $dir は既に存在しています。</p>";
        } else {
        // ディレクとリを作成します。
            if (mkdir($dir)) {
                echo "<p>ディレクとリ $dir の作成に成功しました。</p>";
            } else {
                echo "<p>ディレクとリ $dir の作成に失敗しました。</p>";
            }
        }
        ?>
    </body>
</html>
