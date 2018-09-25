<?php
require_once '../lib/h.php';
require_once '../lib/password_compat/password.php';

// クリックジャッキング対策☆レシピ290☆（クリックジャッキングとは？）をします。
header('X-FRAME-OPTIONS:SAMEORIGIN');

// セッションを開始します。
session_start();

// ユーザー名とパスワードを設定します。複数名分の設定ができます。
$userid[]   = 'admin';   // ユーザーID
$username[] = '管理者';  // お名前
// パスワード「pass1」をpassword_hash()関数でハッシュ化した文字列
$hash[] = '$2y$10$7llM8TDTW3cxrMPzwd1ydOky3FP7yYOzn/d4bEWWbeFDiQ.tTbM3O';

$userid[]   = 'test';
$username[] = 'テスト';
// パスワード「pass2」をpassword_hash()関数でハッシュ化した文字列
$hash[] = '$2y$10$qNxqM4UP79klxfqV9cIwcO6LBJI44Z34k76m9w9teN.PLpfTe8lxG';

// エラーメッセージの変数を初期化します。
$error = ''; 

// 確証済みかどうかのセッション変数を初期化します。
if (! isset($_SESSION['auth'])) {
    $_SESSION['auth'] = FALSE;
}

if (isset($_POST['userid']) && isset($_POST['password'])) {
    foreach ($userid as $key => $value) {
        if ($_POST['userid'] === $userid[$key] &&
            password_verify($_POST['password'], $hash[$key])){
            session_regenerate_id(TRUE);
            $_SESSION['auth'] = TRUE;
            $_SESSION['username'] = $username[$key];
            break;
        }
    }
    if (! isset($_SESSION['auth']) === FALSE) {
        $error = 'ユーザーIDかパスワードに誤りがあります。';
    }
}

if($_SESSION['auth'] !== TRUE){
?> 
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>簡単なログインフォームを作成したい</title>
    </head>
    <body>
        <div id="login">    
        <h1>認証フォーム</h1>
        <?php
        if ($error) {  // エラー文がセットされていれば赤色で表示
          echo '<p style="color:red;">' . h($error) . '</p>';
        }
        ?>
        <form action="<?php echo h($_SERVER['SCRIPT_NAME']); ?>" method="post">
            <dl>
                <dt><label for="userid">ユーザーID：</label></dt>
                <dd><input type="text" name="userid" id="userid" value=""></dd>
            </dl>
            <dl>
                <dt><label for="password">パスワード：</label></dt>
                <dd><input type="password" name="password" id="password" value=""></dd>
            </dl>
            <input type="submit" name="submit" value="ログイン">
        </form>
        </div>
    </body>
</html>
<?php
// スクリプトを終了し、認証が必要なページが表示されないようにします。
  exit();
}
