<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        // 1行分の表組みフォーマット
        $outputFormat = '<tr><td>%s</td><td>%s</td><td>%s</td></tr>';
        $format = 'Y-m-d H:i:s';
        
        echo '<table>';
        echo '<tr>';
        echo '<th>引数にセットした文字列</th>';
        echo '<th>タイムスタンプ</th>';
        echo '<th>日付</th>';
        echo '</tr>';
        
        $time = '2013/10/1 12:34:56';
        // DateTimeオブジェクトをnew演算子で作成します。
        $dateObj = new DateTime($time);
        
        $timestamp = $dateObj->getTimestamp();
        $date = $dateObj->format($format);
        echo sprintf($outputFormat, $time, $timestamp , $date);
        
        $time = '2014-1-1';
        $dateObj = new DateTime($time);
        $timestamp = $dateObj->getTimestamp();
        $date = $dateObj->format($format);
        echo sprintf($outputFormat, $time, $timestamp , $date);
        
        $time = 'now';
        $dateObj = new DateTime($time);
        $timestamp = $dateObj->getTimestamp();
        $date = $dateObj->format($format);
        echo sprintf($outputFormat, $time, $timestamp , $date);
        
        $time = '+1 day';
        $dateObj = new DateTime($time);
        $timestamp = $dateObj->getTimestamp();
        $date = $dateObj->format($format);
        echo sprintf($outputFormat, $time, $timestamp , $date);
        
        $time = '+1 year 2 months 3weeks';
        $dateObj = new DateTime($time);
        $timestamp = $dateObj->getTimestamp();
        $date = $dateObj->format($format);
        echo sprintf($outputFormat, $time, $timestamp , $date);
        
        // 日付として無効な文字列の場合、現在日時になる。
        $time = 'Time is Money';
        $dateObj = new DateTime();
        $dateObj->add(DateInterval::createFromDateString($time));
        $timestamp = $dateObj->getTimestamp();
        $date = $dateObj->format($format);
        echo sprintf($outputFormat, $time, $timestamp , $date);
        
        echo '</table>';
        ?>
    </body>
</html>
