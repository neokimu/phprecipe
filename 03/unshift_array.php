<!DOCTYPE html>
<ahtml lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>配列の先頭に値を追加したい</title>
    </head>
    <body>
        <?php
        $data = array('a', 'b', 'c');
        $val = 'XXX';
        
        echo '<ul>';
        echo '<li><p>追加前の配列</p><pre>';
        print_r($data);
        echo '</pre></li>';
        echo '<li><p>追加する値: ' . $val . '</p></li>';
        echo '<li><p>追加後の配列: </p><pre>';
        array_unshift($data, $val);
        print_r($data);
        echo '</pre></li>';
        echo '</ul>';
        ?>
    </body>
</html>
