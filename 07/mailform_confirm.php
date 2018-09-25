<?php
// h()関数を読み込みます。
require_once '../lib/h.php';
require_once '../lib/checkInput.php';

header('X-FRAME-OPTION: SAMEORIGIN');

session_start();

$_POST = checkInput($_POST);

if(isset($_POST['token']) && isset($_SESSION['token'])) {
    $token = $_POST['token'];
    
    if ($token != $_SESSION['token']) {
        die('不正アクセスの疑いがあります。');
    } 
} else {
            die('不正アクセスの疑いがあります。');
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';
// エラーメッセージを保存する配列を初期化します。
$error = array();

// 名前欄をチェックします。
if (trim($name) == '') {
    $error[] = 'お名前は必須項目です。';
} elseif (mb_strlen($name) > 100) {
    $error[] = 'お名前は100文字以内でお願い致します。';
}
// メールアドレス欄をチェック☆レシピ210☆（メールアドレスの形式をチェックしたい）します。
if (trim($email) == '') {
    $error[] = 'メールアドレスは必須項目です。';
} elseif (mb_strlen($email) > 256) {
    $error[] = 'メールアドレスは256文字以内でお願い致します。';
} else {
  $pattern = '/\A([a-z0-9_\-\+\/\?]+)(\.[a-z0-9_\-\+\/\?]+)*' .
             '@([a-z0-9\-]+\.)+[a-z]{2,6}\z/i';
    if (! preg_match($pattern, $email)) {
        $error[] = 'メールアドレスの形式が正しくありません。';
    }
}
// コメント欄をチェックします。
if (trim($comment) == '') {
    $error[] = 'コメントは必須項目です。';
} elseif (mb_strlen($comment) > 500) {
    $error[] = 'コメントは500文字以内でお願い致します。';
}

// POSTされたデータとエラーメッセージをセッション変数に保存します。
$_SESSION['name']    = $name;
$_SESSION['email']   = $email;
$_SESSION['comment'] = $comment;
$_SESSION['error']   = $error;

if (count($error) > 0) {
// エラーがある場合は、入力フォームに戻します☆レシピ238☆（別のページに飛ばしたい）。
    $dirname = dirname($_SERVER['SCRIPT_NAME']);
    // Windowsではdirname()関数の結果が'/'の場合は'\'になる
    $dirname = ($dirname == DIRECTORY_SEPARATOR) ? '' : $dirname;
    $uri = 'http://' . $_SERVER['SERVER_NAME'] . $dirname . '/mailform.php';
    header('HTTP/1.1 303 See Other');
    header('Location: ' . $uri);

// 確認画面を表示します。
} else {
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>内容確認</title>
    </head>
    <body>
    <div id="mailbox">
    <p>以下の内容でよろしければ送信ボタンを押してください。</p>
    <dl>
            <dt>お名前：</dt>
            <dd><?php echo h($name);?></dd>
    </dl>
    <dl>
            <dt>eメールアドレス：</dt>
            <dd><?php echo h($email);?></dd>
    </dl>
    <dl>
            <dt>コメント：</dt>
            <dd><?php echo nl2br(h($comment), false);?></dd>
    </dl>

    <form action="mailform.php" method="post">
        <input type="submit" name="back" value="入力画面に戻る">
    </form>
    <form action="mailform_thanks.php" method="post">
        <input type="hidden" name="token" value="<?php echo h($token);?>">
        <input type="submit" name="submit" value="送信する">
    </form>
    </div>
    </body>
</html>
<?php
}
