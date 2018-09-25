<?php
require_once '../lib/h.php';

session_start();

$_SESSION['date'] = '2013年06月23日　05時10分55秒';
$_SESSION['user'] = 'user';
$_SESSION['sample'] = 'PHP逆引きレシピ';

$oldSession = $_SESSION;

$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>セッションを破棄したい</title>
    </head>
    <body>
        <?php
        echo '<p>破棄前のセッション情報</p>';
        echo '<pre>';
        print_r(h($oldSession));
        echo '</pre>';
        
        session_destroy();
        
        echo '<p>破棄後のセッション情報</p>';
        echo '<pre>';
        print_r(h($_SESSION));
        echo '</pre>';
        ?>
    </body>
</html>
