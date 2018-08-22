
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アルファベット</title>
    </head>
    <body>
        <?php
        $text1 = 'this is a pen.';
        echo '<p>変換する文字列: ' . $text1 . '</p>';
        echo '<ul>';
        echo '<li><p>すべてのアルファベットを大文字に変換する(strtoupper)</p>';
        echo '<p>'. strtoupper($text1) . '</p></li>';
        echo '<li><p>1文字目だけを大文字にする(ucfirst)</p>';
        echo '<p>' . ucfirst($text1) .'</p></li>';
        echo '<li><p>単語の1文字目を大文字にする(ucwords)</p>';
        echo '<p>' . ucwords($text1) .'</p></li>';
        echo '</ul>';
        
        $text2 = ' t hｉｓ　ｉｓ　ａ　ｐｅｎ'; // aのみ半角
        echo '<p>変換する文字列: ' . $text2 . '</p>';
        echo '<li><p>全角アルファベットを大文字にする(mb_strtoupper)</p>';
        echo '<p>' . mb_strtoupper($text2) . '</p></li>';
        echo '<li><p>すべてのアルファベットを大文字に変換する(strtoupper)</p>';
        echo '<p>'. strtoupper($text2) . '</p></li>';
        echo '</ul>';
        ?>
    </body>
</html>
