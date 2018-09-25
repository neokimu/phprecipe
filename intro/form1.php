<?php
session_start();
session_regenerate_id(TRUE);
require '../lib/functions.php';

// 画像認証ライブラリーを読み込む
$cryptinstall = '../intro_crypt/cryptographp.fct.php';
require $cryptinstall;

$data = array();
$data['name']    = isset($_SESSION['name']) ? $_SESSION['name'] : NULL;
$data['email']   = isset($_SESSION['email']) ? $_SESSION['name'] : NULL;
$data['subject'] = isset($_SESSION['subject']) ? $_SESSION['name'] : NULL;
$data['body']    = isset($_SESSION['body']) ? $_SESSION['name'] : NULL;

if(! isset($_SESSION['ticket'])) {
    $_SESSION['ticket'] = sha1(uniqid(mt_rand(), TRUE));
}

$data ['ticket'] = $_SESSION['ticket'];

display('form1_view.php', $data);

