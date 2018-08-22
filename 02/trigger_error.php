<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ユーザーエラーを発生されたい</title>
    </head>
    <body>
        <?php
        $check = 1;
        
        // ユーザーエラーを発生されます。
        if ($check == 1) {
            trigger_error('E_USER_NOTICE を発生させます');
            trigger_error('E_USER_WARNING を発生させます', E_USER_WARNING);
            trigger_error('E_USER_ERROR を発生させます', E_USER_ERROR);
        }
        
        // E_USER_ERROR で処理が止まれため、これ以降は出力されません。
        echo $check;
        ?>
    </body>
</html>
