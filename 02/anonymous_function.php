<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>無名関数って何ですか？</title>
    </head>
    <body>
        <?php
        require_once '../lib/h.php';
        // 処理対象の配列を用意します。
        $nature = array('water', 'forest', 'tree', 'cloud', 'sun', 'river');
        
        // 無名関数を変数にセットします。
        $filter_less5 = function ($text) {
        // データが５文字未満であればtrueを返します。
            return strlen($text) < 5;
        };
        // フィルタ処理を行います。
        $filter_less5 = array_filter($nature, $filter_less5);
        
        // 結果を出力します。
        echo '<p>5文字未満のデータ：</p>';
        echo '<ul>';
        foreach ($filter_less5 as $data) {
            echo '<li>' . h($data) . '</li>';
        }
        echo '</ul>';
        
        // 無名関数を直接コールバック関数に指定してフィルタ処理を行います。
        $filtered_equal5 = array_filter($nature,
        // データが5文字であればtrueを返します。
            function ($text) {
                return strlen($text) == 5;
            } 
        );
        
        // 結果を出力します。
        echo '<p>5文字のデータ：</p>';
        echo '<ul>';
        foreach ($filtered_equal5 as $data) {
            echo '<li>' . h($data) . '</li>';
        }
        echo '</ul>';
        
        ?>
    </body>
</html>
