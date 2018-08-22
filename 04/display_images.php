<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ディレクトリ内の画像を一覧表示したい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        // 画像を一覧表示するディレクトリを設定します。
        $dirName = '../data';
        if (!is_dir($dirName)) {
            die('ディレクトリが存在しません。');
        }
        
        echo "<p>ディレクトリ名(相対パス): $dirName <br>";
        echo '絶対パス: ' . realpath($dirName) .'</p>';
        echo '<p>ディレクトリ内の画像一覧</p>';
        
        // ディレクトリを調べます。
        $dir = scandir($dirName);
        
        // ディレクトリ内の画像を一覧表示します。
        foreach ($dir as $d) {
            $path = $dirName . '/' . $d;
            // 「.」から始まる要素とディレクトリかどうかを確認します。
            if (strpos($d, '.') === 0 || is_dir($path)) {
                continue;
            }
            // getimagesize()関数で画像ファイルかどうかを確認します。
            if (@getimagesize($path) !== FALSE) {
                // 拡張子がGIF, PNG, JPGの画像を表示
                $extension = pathinfo($path, PATHINFO_EXTENSION);
                if (! in_array($extension, array('gif', 'png', 'jpg', 'jpeg'))) {
                    continue;
                }
                $imageFile = 'display.php?file=' . rawurlencode($d);
                echo '<a href="' . h($imageFile) . '" target="_blank">';
                echo '<img src="' . h($imageFile) . '" width="100" alt="写真">';
                echo '</a>&nbsp';
            }
        }
        ?>
    </body>
</html>
