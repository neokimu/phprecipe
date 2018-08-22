<?php
// Content-Typeヘッダーを送信します。
header('Content-Type: image/png');
// Internet ExploreがContent-Typeヘッダーを無視しないようにします。
header('X-Contetnt-Type-Options: nosniff');

// 画像を作成しなす。
$image = imagecreatetruecolor(400, 300);

// 画像の背景色に赤色を設定します。
// 第2~4引数をRGB(Red,Green,Blue)の1つずつを0~255の整数で指定
$bg_color = imagecolorallocate($image, 255, 0, 0);
imagefill($image, 0, 0, $bg_color);

// 画像をブラウザに出力します。
imagepng($image);

// 画像を破棄しメモリを解放します。
imagedestroy($image);
