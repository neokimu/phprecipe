<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>特定の文字列が含まれているか調べたい</title>
    </head>
    <body>
        <?php
        $keyword = 'XYZ';
        echo '<p>検索する文字列: ' . $keyword . '</p>';
        
        // XYZが含まれる場合
        $text1 = 'abcXYZ';
        echo '<p>' . $text1 . 'には';
        if(mb_strpos($text1, $keyword) === FALSE){
            echo $keyword . 'は含まれていません。';
        } else {
            echo $keyword . 'が含まれています。';
        }
        echo '</p>';
        
        // XYZが含まれない場合
        $text2 = 'abcxyz';
        echo '<p>' . $text2 . 'には';
        if(mb_strpos($text2, $keyword) === FALSE){
            echo $keyword . 'は含まれていません。';
        } else {
            echo $keyword . 'が含まれています。';
        }
        echo '</p>';
        ?>
    </body>
</html>
