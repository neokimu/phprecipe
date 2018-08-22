<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>数値を必ず小数点以下まで表示したい</title>
    </head>
    <body>
        <?php
       $num1 = 10;
       $num2 = 1066.5;
       $num3 = 0.456789;
       
       $format = '%0.2f';
       
       echo '<p>sprintf()関数で小数点第2位まで表示させる</p>';
       echo '<ul>';
       echo '<li>' . $num1 . ' -> ' . sprintf($format, $num1) . '</n>';
       echo '<li>' . $num2 . ' -> ' . sprintf($format, $num2) . '</n>';
       echo '<li>' . $num3 . ' -> ' . sprintf($format, $num3) . '</n>';
       echo '</ul>';
       
       echo '<p>number_format()関数で小数点第2位まで表示させる</p>';
       echo '<ul>';
       echo '<li>' . $num1 . ' -> ' . number_format($num1, 2) . '</n>';
       echo '<li>' . $num2 . ' -> ' . number_format($num2, 2) . '</n>';
       echo '<li>' . $num3 . ' -> ' . number_format($num3, 2) . '</n>';
       echo '</ul>';
       
       echo '<p>number_format()関数で小数点第2位まで表示させる（カンマ区切り無し）</p>';
       echo '<ul>';
       echo '<li>' . $num1 . ' -> ' . number_format($num1, 2, '.', '') . '</n>';
       echo '<li>' . $num2 . ' -> ' . number_format($num2, 2, '.', '') . '</n>';
       echo '<li>' . $num3 . ' -> ' . number_format($num3, 2, '.', '') . '</n>';
       echo '</ul>';
        ?>
    </body>
</html>
