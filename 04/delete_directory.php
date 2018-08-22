<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ディレクトリを削除したい</title>
    </head>
    <body>
        <?php
        // 削除するディレクトリ名を設定します。
        $dir = '../data/output/files';
        
        $dirContensNum = 0; // ファイル数
        // scandir()関数でディレクトリ内のファイルなどの数を調べます。
        if (is_dir($dir) && ($dirContens = scandir($dir)) !== FALSE) {
        //  print_r($dirContens);
        // ディレクトリ自身「.」と新ディレクトリ「..」を配列から除外します。
            $dirContens = array_diff($dirContens, array('.', '..'));
            $dirContensNum = count($dirContens);
        }
        
        // ディレクトリを削除します。
        if ($dirContensNum === 0 && is_writable($dir) && rmdir($dir)) {
            echo "<p>ディレクトリ $dir の削除に成功しました。</p>";
        } else {
            echo "<p>ディレクトリ $dir の削除に失敗しました。</p>"; 
        }
        ?>
    </body>
</html>
