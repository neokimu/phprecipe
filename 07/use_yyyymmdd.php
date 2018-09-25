<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>「YYYY/MM/DD」形式の日付を利用したい</title>
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        $originalDate1 = '2016/02/28';
        $date1 = new DateTime($originalDate1);
        $timestamp1 = $date1->getTimestamp();
        echo '<p>元の日付: ' . h($originalDate1) . '<br>';
        echo 'UNIXタイムスタンプ: ' . h($timestamp1) . '<br>';
        echo 'フォーマット変換処理: ' . h($date1->format('Y年n月j日')) . '<br>';
        $date1->add(DateInterval::createFromDateString('+1 day'));
        echo '1日加算後: ' . h($date1->format('Y/m/d'));
        echo '</p>';
        
        $originalDate2 = '2016-2-30';
        $date2 = new DateTime($originalDate2);
        $timestamp2 = $date2->getTimestamp();
        echo '<p>元の日付: ' . h($originalDate2) . '<br>';
        echo 'UNIXタイムスタンプ: ' . h($timestamp2) . '<br>';
        echo 'フォーマット変換処理: ' . h($date2->format('Y年n月j日')) . '<br>';
        $date2->add(DateInterval::createFromDateString('+1 day'));
        echo '1日加算後: ' . h($date2->format('Y/m/d'));
        echo '</p>';
        
        $originalDate3 = '2116/2/28';
        $date3 = new DateTime($originalDate3);
        $timestamp3 = $date3->getTimestamp();
        echo '<p>元の日付: ' . h($originalDate3) . '<br>';
        echo 'UNIXタイムスタンプ: ' . h($timestamp3) . '<br>';
        echo 'フォーマット変換処理: ' . h($date3->format('Y年n月j日')) . '<br>';
        $date3->add(DateInterval::createFromDateString('+1 day'));
        echo '1日加算後: ' . h($date3->format('Y/m/d'));
        echo '</p>';
        ?>
    </body>
</html>
