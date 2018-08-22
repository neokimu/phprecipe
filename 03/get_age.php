<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>生年月日から現在の年齢を求めたい</title>
    </head>
    <body>
        <?php
        // 生年月日と計算基準日のタイムスタンプを取得
        $birthday = mktime(0, 0, 0, 3, 3, 1992);
        $baseday = mktime(0);
        
        echo '<p>計算元のタイムスタンプ値</p>';
        echo '<ul>';
        echo '<li>誕生日: ' . $birthday . '</li>';
        echo '<li>計算基準日: ' . $baseday . '</li>';
        echo '</ul>';
        
        // 生年月日と計算基準日をYYYYMMDD形式の数値に変換
        $birthdayInt = (int) date('Ymd', $birthday);
        $basedayInt = (int) date('Ymd', $baseday);
        
        echo '<p>計算元のタイムスタンプ値</p>';
        echo '<ul>';
        echo '<li>誕生日: ' . $birthdayInt . '</li>';
        echo '<li>計算基準日: ' . $basedayInt . '</li>';
        echo '</ul>';
        
        // 年齢を算出
        $age = (int) (($basedayInt - $birthdayInt) / 10000);
        echo '<p>計算結課(年齢): ' . $age . '</p>';
        ?>
    </body>
</html>
