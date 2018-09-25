<?php
require_once '../lib/password_compat/password.php';
require_once '../lib/h.php';

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    
    $options = array('cost' => 10);
    
    $hash = password_hash($password, PASSWORD_DEFAULT , $options);
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ハッシュ化済みパスワードを取得するスクリプト</title>
    </head>
    <body>
        <?php
        if(isset($hash)){
            echo '生パスワード：' . h($password) . '<br>';
            echo 'ハッシュ化済みパスワード：' . h($hash);
        }            
        ?>
        <hr>
        <form method="post" action="password_hash.php">
            <label for="password">ハッシュ化したいパスワード文字列：</label>
            <input type="password" name="password" id="password" value="">
            <input type="submit" name="submit" value="ハッシュ化">
        </form>
    </body>
</html>
