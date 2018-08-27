<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>指定した日付の曜日を求めたい</title>
    </head>
    <body>
        <?php
        // 2013年10月1日のタイムスタンプ
        $timestamp = mktime(0, 0, 0, 10+1, 0, 2013);
        $date = getdate($timestamp);
        /* dateの値の確認
        foreach ($date as $value) {
            echo $value .'<br>';
        }; */
        
        $wday = $date['wday'];
        
        // 曜日数値を文字表記に変換するための配列
        $weekdaylabel = array('日', '月', '火', '水', '木', '金', '土');
        
        echo '<p>日付: ' . date('Y/m/d', $timestamp) . '</p>';
        echo '<p>結果: ' . $wday . ' (' . $weekdaylabel[$wday] .')</p>';
        ?>
    </body>
</html>
