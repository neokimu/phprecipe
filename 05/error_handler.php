<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>エラーを例外として処理</title>
    </head>
    <body>
        <?php
        // 無名関数を使ってエラーハンドラを設定します。
        set_error_handler(
                function ($errno, $errstr, $errfile) {
                    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
                }
        );
        
        function show_error_details(ErrorException $e) {
            echo '<p>';
            echo 'エラーコード：' . $e->getCode() . '<br>';
            echo 'エラーメッセージ：' . $e->getMessage() . '<br>';
            echo 'エラー発生ファイル：' . $e->getFile() . '<br>';
            echo 'エラー発生行：' . $e->getLine() . '<br>';
            echo '</p>';
        }
        
        try {
            strlen(array());
        } catch (ErrorException $e) {
            show_error_details($e);
        }
        
        try {
            trim($dummy);
        } catch (ErrorException $e) {
            show_error_details($e);
        }
        ?>
    </body>
</html>
