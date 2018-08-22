<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>バッシュを計算したい</title>
    </head>
    <body>
        <?php
        $text = 'abcde12345';
        echo '<p>ハッシュを計算対象の文字列: ' . $text . '</p>';
        echo '<ul>';
        
        echo '<li><p>MD5を計算</p>';
        echo '<p>' . md5($text) . '</p></li>';
        
        echo '<li><p>CRC32多項式計算</p>';
        echo '<p>' . crc32($text) . '</p></li>';
        
        echo '<li><p>SHA1ハッシュを計算</p>';
        echo '<p>' . sha1($text) . '</p></li>';
        
        echo '<li><p>SHA256を計算</p>';
        echo '<p>' . hash('sha256', $text) . '</p></li>';
        
        echo '</ul>';
        
        echo '<p>hash()関数で指定できるハッシュアルゴリズム</p>';
        echo '<pre>';
        print_r(hash_algos());
        echo '</pre>';
        ?>
    </body>
</html>
