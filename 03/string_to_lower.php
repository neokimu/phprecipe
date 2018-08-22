
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アルファベットを大文字から小文字に変換したい</title>
    </head>
    <body>
        <?php
        $text1 = 'THIS IS A PEN.';
        echo '<p>変換する文字列: ' . $text1 . '</p>';
        echo '<ul>';
        echo '<li><p>すべてのアルファベットを小文字に変換する(strtolower)</p>';
        echo '<p>'. strtolower($text1) . '</p></li>';
        echo '</ul>';
        
        $text2 = 'ＴＨＩＳ　ＩＳ　Ａ　ＰＥＮ'; // Aのみ半角
        echo '<p>変換する文字列: ' . $text2 . '</p>';
        echo '<li><p>全角アルファベットを小文字にする(mb_strtolower)</p>';
        echo '<p>' . mb_strtolower($text2) . '</p></li>';
        echo '</ul>';
        ?>
    </body>
</html>
