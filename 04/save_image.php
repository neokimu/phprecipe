<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像をファイルとして保存したい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        // ファイル名を設定します。
        $fileName = '../data/output/imagepng.png';
        if (! is_dir(dirname($fileName))) {
            die('保存するディレクトリが存在しません。');
        }
        
        // 画像を作成します。
        $image = imagecreatetruecolor(400, 300);
        // 画像の背景色を設定します。
        $bg_color = imagecolorallocate($image, 0, 255, 0);
        imagefill($image, 0, 0, $bg_color);
        
        // 画像をファイルに存在します。
        // 成功した場合、imagepng()関数はtrueを返します。
        if (imagepng($image, $fileName)) {
            $url = 'display.php?file=' . rawurlencode(basename($fileName))
                    . '&dir=output';
            echo '<a href="' . h($url) . '">保存した画像ファイルを表示する</a>';
        }
        
        // 画像を破棄しメモリを解放します。
        imagedestroy($image);
        ?>
    </body>
</html>
