<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>URLの構成要素を解析したい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        $url = 'http://uzer:p-sw-d@www.example.jp/path/abc/?arg1=val1&arg2=val2#anchor';
        print_r(h(parse_url($url)));
        ?>
    </body>
</html>
