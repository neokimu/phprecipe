<?php
// セッションを開始
session_start();

// 必要な関数を読み込む
require '../lib/functions.php';

// POSTされたデータをチェック
$_POST = checkInput($_POST);

// 固定トークンを確認
if (isset($_POST['ticket'], $_SESSION['ticket'])) {
  $ticket = $_POST['ticket'];
  if ($ticket !== $_SESSION['ticket']) {
    die('不正アクセスの疑いがあります。');
  }
} else {
  die('不正アクセスの疑いがあります。');
}

// 変数にセッション変数を代入
$name    = $_SESSION['name'];
$email   = $_SESSION['email'];
$subject = $_SESSION['subject'];
$body    = $_SESSION['body'];

// メール宛て先
$mailTo  = 'taehyung.kim@seezoo.co.jp';
// Return-Pathに指定するメールアドレス
$returnMail = $email;

// mbstringの日本語設定を行う
mb_language('ja');
mb_internal_encoding('UTF-8');

// Fromヘッダーを作成
$header = 'From: ' . mb_encode_mimeheader($name) . ' <' . $email . '>';

// メールの送信。セーフモードがOnの場合は第5引数が使えない
if (ini_get('safe_mode')) {
  $result = mb_send_mail($mailTo, $subject, $body, $header);
} else {
  $result = mb_send_mail($mailTo, $subject, $body, $header, '-f' . $returnMail);
}

// 送信結果をお知らせする変数を初期化
$message = '';

// メール送信の結果判定
if ($result) {
  $message =  '送信完了！';
  // セッション変数を破棄
  $_SESSION = array();
  session_destroy();
} else {
  $message = '送信失敗';
}

$data = array();
$data['message'] = $message;
display('form3_view.php', $data);

if ($subject == '') {
    $error[] = '件名は必須項目です。';
} elseif (mb_strlen($name) > 100) {
    $error[] = '件名は100文字以内でお願い致します。';
}

if ($body == '') {
    $error[] = '内容は必須項目です。';
} elseif (mb_strlen($name) > 500) {
    $error[] = '内容は500文字以内でお願い致します。';
}

if (mb_strlen($code)==4) {
    $error[] = '確認キーワードは4文字以内で入力してください。';
} elseif (!chk_crypt($code)) {
    $error[] = '確認キーワードが誤っています。';
}

if (count($error) > 0) {
  // エラーがある場合は、入力フォームを表示
  $data = array();
  $data['error']   = $error;
  $data['name']    = $name;
  $data['email']   = $email;
  $data['subject'] = $subject;
  $data['body']    = $body;
  $data['ticket']    = $ticket;
  display('form1_view.php', $data);
}else {  // エラーが0の場合
  // POSTされたデータをセッション変数に保存
  $_SESSION['name']    = $name;
  $_SESSION['email']   = $email;
  $_SESSION['subject'] = $subject;
  $_SESSION['body']    = $body;

  // 確認画面を表示
  $data = array();
  $data['name']    = $name;
  $data['email']   = $email;
  $data['subject'] = $subject;
  $data['body']    = $body;
  $data['ticket']  = $ticket;
  display('form2_view.php', $data);
}