<?php
$cookie_date = 'data1=PHP逆引きレシピ&data2=好評発売中';
$result = setcookie('php_sample', $cookie_date);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cookieのデータを読み取りたい</title>
    </head>
    <body>
        <p>Cookieを保存しました。</p>
        <p><a href="read_cookie.php">Cookieのデータを読み取る</a></p>
    </body>
</html>
