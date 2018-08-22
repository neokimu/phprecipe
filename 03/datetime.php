<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>日付の表示形式を変えたり、日付の加減をしたい</title>
    </head>
    <body>
        <?php
        echo '<p>現在の日時: ';
        // DateTimeオブジェクトをnew演算子で作成します。
        $now = new DateTime();
        $format1 = 'Y年m月d日 H時i分s秒';        
        $format2 = 'Y年m月d日';        
        $format3 = 'H時i分s秒';        
        
        echo $now->format($format1), '</p>';
        
        echo '<p>1年後の日付: ';
        $now = new DateTime();
        $now->add(DateInterval::createFromDateString('1 year'));
        echo $now->format($format2) . '</p>';
        
        echo '<p>1ヶ月後の日付: ';
        $now = new DateTime();
        $now->add(DateInterval::createFromDateString('1 month'));
        echo $now->format($format2) . '</p>';
        
        echo '<p>1日後の日付: ';
        $now = new DateTime();
        $now->add(DateInterval::createFromDateString('1 day'));
        echo $now->format($format2) . '</p>';
        
        echo '<p>1日前の日付: ';
        $now = new DateTime();
        $now->sub(DateInterval::createFromDateString('1 day'));
        echo $now->format($format2) . '</p>';
        
        echo '<p>1時間後の時間: ';
        $now = new DateTime();
        $now->add(DateInterval::createFromDateString('1 hour'));
        echo $now->format($format3) . '</p>';
        
        echo '<p>1分前の時間: ';
        $now = new DateTime();
        $now->sub(DateInterval::createFromDateString('1 minute'));
        echo $now->format($format3) . '</p>';
        
        echo '<p>1秒後の時間: ';
        $now = new DateTime();
        $now->add(DateInterval::createFromDateString('1 second'));
        echo $now->format($format3) . '</p>';
        
        echo '<p>2013年10月1日の次の日: ';
        $past = new DateTime('2013-10-01');
        echo 'タイムスタンプ: ' . $past->getTimestamp() . ': ';
        $past->add(DateInterval::createFromDateString('1 day'));
        echo $past->format($format2), '</p>';
        ?>
    </body>
</html>
