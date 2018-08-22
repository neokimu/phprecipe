<?php
// 既存の画像ファイルを設定します。
$fileName = '../data/imagecreatefrompng.png';
if (!file_exists($fileName)) {
    die('ファイルが存在しません。');
}

// Content-Typeヘッダーを送信します。
header('Content-Type: image/png');
// Internet ExploreがContent-Typeヘッダーを無視しないようにします。
header('X-Contetnt-Type-Options: nosniff');

// 既存ファイルから画像を作成します。
$image = imagecreatefrompng($fileName);

// 画像をブラウザに出力します。
imagepng($image);

// 画像を破棄しメモリを解放します。
imagedestroy($image);