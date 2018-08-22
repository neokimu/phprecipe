<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>配列の一部を取り出したい</title>
    </head>
    <body>
        <?php
        $data = array('a', 'b', 'c', 'd', 'e', 'f');
        echo '<p>対象の配列:</p><pre>';
        print_r($data);
        echo '</pre>';
        
        echo '<ul>';
        echo '<li><p>2番目から３つの値を取り出す</p><pre>';
        $ret1 = array_slice($data, 1, 3);
        print_r($ret1);
        echo '</pre></li>';
        
        echo '<li><p>3番目から末尾の値まで取り出す</p><pre>';
        $ret2 = array_slice($data, 2);
        print_r($ret2);
        echo '</pre></li>';
        
        echo '<li><p>後ろの３番目の値から末尾まで取り出す</p><pre>';
        $ret3 = array_slice($data, -3);
        print_r($ret3);
        echo '</pre></li>';
        echo '</ul>';
        
        ?>
    </body>
</html>
