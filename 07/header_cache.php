<?php
require_once '../lib/h.php';

header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>キャッシュを無効にしたい</title>
    </head>
    <body>
       <?='<p>'. h(date('Y年m月d日　H時i分s秒')) . '</p>'?>
    </body>
</html>


