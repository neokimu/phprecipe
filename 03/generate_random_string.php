<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ランダムな文字列を生成したい</title>
    </head>
    <body>
        <?php
        // 必要な関数を読み込みます。
        require_once '../lib/generateRandomString.php';
        require_once '../lib/generateSecureRandomString.php';
        
        echo '<p>generateRandomString()関数<br>';
        echo '10文字のランダム文字列を生成: ';
        echo generateRandomString(10) . '<br>';
        echo '15文字でかつabcde_!#$@のみの文字列を生成: ';
        echo generateRandomString(15, 'abcde_!#$@') . '</p>';
        
        echo '<p>generateSecureRandomString()関数<br>';
        echo '10文字のランダム文字列を生成: ';
        echo generateSecureRandomString(10) . '</p>';
        echo '15文字でかつabcde_!#$@のみの文字列を生成: ';
        echo generateSecureRandomString(15, 'abcde_!#$@') . '</p>';
        ?>
    </body>
</html>
