<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>配列の指定範囲を直き変えたい</title>
    </head>
    <body>
        <?php
        echo '<p>配列の指定範囲を直き変えるく</p>';
        $data1 = array('a', 'b', 'c', 'd');
        $val1 = 'XXX';
        $pos1 = 1;
        $len1 = 1;
        
        echo '<ul>';
        echo '<li><p>直き変え前の配列:</p><pre>';
        print_r($data1);
        echo '</pre></li>';
        echo '<li><p>開始位置: ' . $pos1 . '</p></li>';
        echo '<li><p>直し変え数: ' . $len1 . '</p></li>';
        echo '<li><p>新しい値: ' . $val1 . '</p></li>';
        
        $ret1 = array_splice($data1, $pos1, $len1, $val1);
        echo '<li><p>直き変え後の配列:</p><pre>';
        print_r($data1);
        echo '</pre></li>';
        echo '<li><p>取り除かれた値:</p><pre>';
        print_r($ret1);
        echo '</pre></li>';
        echo '</ul>';
        
        echo '<p>配列の指定範囲を他の配列で直き変えるく</p>';
        $data2 = array('a', 'b', 'c', 'd');
        $val2 = array('XXX', 'YYY', 'ZZZ');
        $pos2 = 1;
        $len2 = 2;
        
        echo '<ul>';
        echo '<li><p>直し変え前の配列:</p><pre>';
        print_r($data2);
        echo '</pre></li>';
        echo '<li><p>開始位置: ' . $pos2 . '</p></li>';
        echo '<li><p>直し変え数: ' . $len2 . '</p></li>';
        echo '<li><p>新しい値: ' . print_r($val2)  . '</p></li>';
        
        $ret2 = array_splice($data2, $pos2, $len2, $val2);
        echo '<li><p>直し変え後の配列:</p><pre>';
        print_r($data2);
        echo '</pre></li>';
        echo '<li><p>取り除かれた値:</p><pre>';
        print_r($ret2);
        echo '</pre></li>';
        echo '</ul>';

        ?>
    </body>
</html>
