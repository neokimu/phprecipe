<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>デフォルト引数値を指定したい</title>
    </head>
    <body>
        <?php
        // 関数のデフォルト引数値を指定します。
        function recommend($musicion = 'The Beatles') {
            return 'おすすめの音楽は' . $musicion . '<br>';
        }
        
        // 関数を実行して結果を表示します。
        echo recommend();
        echo recommend('The Rolling Stones');
        ?>
    </body>
</html>
