<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>CSVファイルを読み込みたい</title>
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        // h()関数を読み込みます。
        require_once '../lib/h.php';
        
        // CSVファイルはWindowsのExcelで作成したSJISエンコード
        $csvFile = '../data/read_csv.csv';
        if (!file_exists($csvFile)) {
            die('ファイルが存在しません');
        }
        
        // 文字化け対策
        // CSVファイルの中身をすべて取り込みます。
        $tempCSV = file_get_contents($csvFile);
        // 文字エンコードをUTF-8に変換します。
        $tempCSV = mb_convert_encoding($tempCSV, 'UTF-8', 'CP932');
        // 一時ファイルに保存します。
        $fp = tmpfile();
        fwrite($fp, $tempCSV);
        // ファイルポインタを先頭に戻ります。
        rewind($fp);
        // ローケルを設定します。
        setlocale(LC_ALL, 'ja_JP.UTF-8');
        
        // 1行ずつ読み込み、表組に整形します。
        $html = '<table>';
        
        while ($arr = fgetcsv($fp)) {
            if (! array_diff($arr, array(''))) {  // 空行を除外
              continue;
            }
            list($day, $teacher, $subject) = $arr;
            // nl2br()関数で要素内改行を<br>に変換
            $html .= '<tr>'
              . '<td>' . nl2br(h($day), false) . '</td>'
              . '<td>' . nl2br(h($teacher), false) . '</td>'
              . '<td>' . nl2br(h($subject), false) . '</td>'
              . '</tr>';
        }
        
        $html .= '</table>';
        
        // ファイルのロックを解除します。
        fflush($fp);
        flock($fp, LOCK_UN);
        
        // ファイルをとじます。
        fclose($fp);
        
        echo $html;
        ?>
    </body>
</html>
